<?php

namespace App\controllers;

class HandlerController extends Controller
{
	public function addCommentHandler ()
	{
		// закрываем доступ неавторизованным пользователям
		Parent::protectAuth();

		$data = [
			'user_id' => $_SESSION['auth_user_id'],
			'article_id' => $_POST['article_id'],
			'message' => $_POST['message']
		];

	    $this->qb->create('comments', $data);

		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

	public function registerHandler ()
	{
		Parent::protectAuth(false);

		$mail_data = [
			'from_email' => 'admin@kotha_pro.com',
			'from_name' => 'Admin',
			'subject' => 'Email confirmation',
			'message' => "Hi! You just have registered on our website! Please follow the link below to continue registration: <pre>"
		];

		$this->user->register($_POST, $mail_data);

		header('Location: /login');
		exit;
	}

	public function loginHandler ()
	{
		Parent::protectAuth(false);

		$this->user->login($_POST);

		header('Location: /home');
		exit;
	}

	public function logoutHandler ()
	{
		Parent::protectAuth();

		$this->user->logout();

		header('Location: /home');
		exit;
	}

	public function verifyHandler ()
	{
		Parent::protectAuth(false);

		$this->user->verify($_GET);

		unset($_SESSION['mail_sent']);
		$_SESSION['email_verified'] = 1;

		header('Location: /login');
		exit;
	}
}