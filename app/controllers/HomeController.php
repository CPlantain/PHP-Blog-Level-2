<?php

namespace App\controllers;

use App\classes\Sidebar;
use App\classes\Paging;
use R;

class HomeController extends Controller
{
	use Sidebar;
	use Paging;

	public function homepage () 
	{
		// меняем uri, если попали сюда со слеша
		if($_SERVER['REQUEST_URI'] === '/') { header('Location: /home'); }

		$this->assignFrontSidebarData();

		$paginator = $this->setPaging('articles', 4, 'page');
		$paging = $this->getPagingInfo();

		$articles = $this->qb->getAllJoined(
			'articles', 
			'users.username, categories.name',
			[':limit' => $paging['limit'], ':offset' => $paging['offset']],
			'paging'			
		);

		echo $this->templates->render('front/homepage', 
			[
				'articles' => $articles, 
				'paginator' => $paginator
			]);
	}

	public function category () 
	{
		$this->assignFrontSidebarData();

		$id = $_GET['id'];

		$articles = $this->qb->getAllJoined(
			'articles', 
			'users.username, categories.name',
			[':id' => $id],
			'category_id = :id'
		);

		echo $this->templates->render('front/category', ['articles' => $articles]);
	}

	public function singlePage ()
	{
		$this->assignFrontSidebarData();

		$id = $_GET['id'];

		$article = $this->qb->getAllJoined('articles', 
			'users.username, categories.name',
			[':id' => $id],
			'a.id = :id'
		);

		$comments = $this->qb->getAllJoined('comments', 
			'users.username',
			[':id' => $id],
			'c.article_id = :id'
		);

		if ($_SESSION['flash']) {
			unset($_SESSION['flash']);

			$flash = $this->flash->display();
		}

		echo $this->templates->render('front/single-page', 
			[
				'article' => reset($article),
				'comments' => $comments,
				'flash' => $flash
			]);
	}

	public function registerForm ()
	{
		// закрываем доступ тем кто уже авторизован
		Parent::protectAuth(false);

		// выводим флеш сообщение и чистим сессию
		if ($_SESSION['flash']) {
			unset($_SESSION['flash']);

			$flash = $this->flash->display();
		}

		echo $this->templates->render('front/register', ['flash' => $flash]);
	}

	public function loginForm ()
	{
		// закрываем доступ тем кто уже авторизован
		Parent::protectAuth(false);

		if ($_SESSION['flash']) {
			unset($_SESSION['flash']);

			$flash = $this->flash->display();
		}		

		echo $this->templates->render('front/login', ['flash' => $flash]);

		// если мы оказались здесь после подтвеждения емейла, чистим соответствующий ключ сессии
		if(isset($_SESSION['email_verified'])) unset($_SESSION['email_verified']);
	}
}