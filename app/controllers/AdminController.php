<?php

namespace App\controllers;

use App\classes\Paging;
use R;

class AdminController extends Controller
{
	use Paging;

	public function main()
	{
		// меняем uri, чтобы пути в видах правильно работали
		if($_SERVER['REQUEST_URI'] === '/admin') { header('Location: admin/'); }

		Parent::protectAdmin();

		echo $this->templates->render('admin/main', []);
	}

	public function articles()
	{
		Parent::protectAdmin();

		$paginator = $this->setPaging('articles', 4, 'page');
		$paging = $this->getPagingInfo();

		$articles = $this->qb->getAllJoined(
			'articles', 
			'users.username, categories.name, COUNT(comments.id) as count',
			[':limit' => $paging['limit'], ':offset' => $paging['offset']],
			'paging'
		);

		echo $this->templates->render('admin/articles', 
			[
				'articles' => $articles,
				'paginator' => $paginator
			]);
	}

	public function categories()
	{
		Parent::protectAdmin();

		$categories = $this->qb->getAllJoined('categories', 'count(articles.id) as count');
		
		echo $this->templates->render('admin/categories', ['categories' => $categories]);
	}

	public function users()
	{
		Parent::protectAdmin();

		$paginator = $this->setPaging('users', 5, 'page');
		$paging = $this->getPagingInfo();

		$users = $this->qb->getAllJoined(
			'users',
			'count(comments.id) as count',
			[':limit' => $paging['limit'], ':offset' => $paging['offset']],
			'paging'
		);

		echo $this->templates->render('admin/users', 
			[
				'users' => $users,
				'paginator' => $paginator
			]);
	}

	public function comments()
	{
		Parent::protectAdmin();

		$paginator = $this->setPaging('comments', 5, 'page');
		$paging = $this->getPagingInfo();

		$comments = $this->qb->getAllJoined(
			'comments', 
			'users.username, articles.title',
			[':limit' => $paging['limit'], ':offset' => $paging['offset']],
			'paging'
		);

		echo $this->templates->render('admin/comments', 
			[
				'comments' => $comments,
				'paginator' => $paginator
			]);
	}

	public function addArticle()
	{
		Parent::protectAdmin();

		$categories = R::findAll('categories');

		echo $this->templates->render('admin/add_article', ['categories' => $categories]);
	}

	public function editArticle()
	{
		Parent::protectAdmin();

		$article = R::load('articles', $_GET['id']);
		$categories = R::findAll('categories');

		// находим и добавляем имя текущей категории в массив статьи
		$current_cat = R::load('categories', $article['category_id']);
		$article['current_cat'] = $current_cat['name'];

		// удаляем текущую категорию из массива всех категорий, чтобы она не дублировалась в списке
		unset($categories[$current_cat['id']]);

		echo $this->templates->render('admin/edit_article', 
			[
				'article' => $article,
				'categories' => $categories
			]);
	}

	public function addCategory()
	{
		Parent::protectAdmin();

		echo $this->templates->render('admin/add_category', []);
	}

	public function editCategory()
	{
		Parent::protectAdmin();

		$category = R::load('categories', $_GET['id']);

		echo $this->templates->render('admin/edit_category', ['category' => $category]);
	}
}