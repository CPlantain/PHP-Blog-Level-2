<?php

namespace App\controllers;

use Intervention\Image\ImageManagerStatic as Image;
use R;

class AdminHandlerController extends Controller
{
	public function addArticleHandler()
	{
		Parent::protectAdmin();

		$data = [
			'user_id' => $_SESSION['auth_user_id'],
			'category_id' => $_POST['category'],
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'content' => $_POST['content']
		];

		// если картинка загружена, генерируем новое имя и сохраняем её
		if(!empty($_FILES['picture']['name'])) {
			$data['picture'] = uniqid('img_') . '.jpg';

			$img = Image::make($_FILES['picture']['tmp_name']);
			$img->save("uploads/{$data['picture']}");
		}

		$this->qb->create('articles', $data);
	
		header('Location: articles');
		exit;
	}

	public function editArticleHandler()
	{
		Parent::protectAdmin();

		$id = $_POST['id'];
		$data = [
			'category_id' => $_POST['category'],
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'content' => $_POST['content']
		];

		// если новая картинка загружена, сохраняем её и удаляем старую
		if(!empty($_FILES['picture']['name'])) {
			$data['picture'] = uniqid('img_') . '.jpg';

			$img = Image::make($_FILES['picture']['tmp_name']);
			$img->save("uploads/{$data['picture']}");

			if ($_POST['old_picture']) {
				unlink("uploads/{$_POST['old_picture']}");
			}
			
		} else {
			// если нет, оставляем ей старое имя
			$data['picture'] = $_POST['old_picture'];
		}

		$this->qb->updateById('articles', $id, $data);

		header('Location: articles');
		exit;
	}

	public function addCategoryHandler()
	{
		Parent::protectAdmin();

		$name = $_POST['name'];

		$this->qb->create('categories', ['name' => $name]);

		header('Location: categories');
		exit;
	}

	public function editCategoryHandler()
	{
		Parent::protectAdmin();

		$id = $_POST['id'];
		$name = $_POST['name'];

		$this->qb->updateById('categories', $id, ['name' => $name]);

		header('Location: categories');
		exit;
	}

	public function deleteArticleHandler()
	{
		Parent::protectAdmin();
		
		$id = $_GET['id'];
		$article = R::load('articles', $id);

		// если у статьи есть изображение, удаляем его
		if($article['picture'] !== NULL) unlink("uploads/{$article['picture']}");

		$this->qb->deleteJoined(
			'articles', 'comments', 
			'WHERE articles.id = :id', 
			['id' => $id]
		);

		header('Location: articles');
		exit;
	}

	public function deleteCategoryHandler()
	{
		Parent::protectAdmin();

		$articles = R::findAll('articles', 'category_id = :id', [':id' => $_GET['id']]);

		// все статьи из удаляемой категории переносим в дефолтную нулевую категорию
		$this->qb->updateAll($articles, ['category_id' => 0]);

		$this->qb->deleteById('categories', $_GET['id']);

		header('Location: categories');
		exit;
	}

	public function deleteUserHandler()
	{
		Parent::protectAdmin();

		$this->qb->deleteJoined(
			'users', 'comments',
			'WHERE users.id = :id', 
			['id' => $_GET['id']]
		);

		header('Location: users');
		exit;
	}

	public function deleteCommentHandler()
	{
		Parent::protectAdmin();

		$this->qb->deleteById('comments', $_GET['id']);

		header('Location: comments');
		exit;
	}
}