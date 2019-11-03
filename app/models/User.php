<?php 

namespace App\classes;

use \Tamtamchik\SimpleFlash\Flash;
use \Delight\Auth\Auth;
use SimpleMail;
use PDO;

/* Класс, управляющий всеми манипуляциями с пользователем */

class User
{
	private $auth;
	private $mailer;
	private $flash;

	public function __construct (Connection $pdo, SimpleMail $mailer, Flash $flash)
	{
		$db = $pdo->makePDO();
		$this->auth = new Auth($db);
		$this->mailer = $mailer;
		$this->flash = $flash;
	}

	// проверяет, является ли пользователь Админом
	public static function checkAdmin()
	{
		return $_SESSION['auth_roles'] === 1 ? true : false;
	}

	// проверяет, авторизован ли пользователь
	public static function checkAuth()
	{
		return $_SESSION['auth_logged_in'] ? true : false;
	}

	// регистрирует пользователя
	public function register ($data, $mail_data)
	{
		$email = $data['email'];
		$password = $data['password'];
		$username = $data['username'];

		$from_email = $mail_data['from_email'];
		$from_name = $mail_data['from_name'];
		$subject = $mail_data['subject'];
		$message = $mail_data['message'];

		try {
		    $userId = $this->auth->register($email, $password, $username, function ($selector, $token) use ($email, $username, $from_email, $from_name, $subject, $message) {

		    	$url = 'http://blog-oop/verify?selector=' . \urlencode($selector) . '&token=' . \urlencode($token);

		    	// отправляет письмо с подтверждением
		        $this->mailer
			        ->setTo($email, $username)
					->setFrom($from_email, $from_name)
					->setSubject($subject)
					->setMessage($message . "<a href=' $url '>click here</a>")
					->setHtml()
					->send();

				$_SESSION['flash'] = true;

				$this->flash->info('the message had been sent to your email address, please read it and follow it\'s instructions to activate your account');
		    });
		}
		catch (\Delight\Auth\InvalidEmailException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Invalid email address');
		    die(header('Location: /register'));
		}
		catch (\Delight\Auth\InvalidPasswordException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Invalid password');
		    die(header('Location: /register'));
		}
		catch (\Delight\Auth\UserAlreadyExistsException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('User already exists');
		    die(header('Location: /register'));
		}
		catch (\Delight\Auth\TooManyRequestsException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Too many requests');
		    die(header('Location: /register'));
		}
	}

	// подтверждает регистрацию
	public function verify ($data)
	{
		$selector = $data['selector'];
		$token = $data['token'];

		try {
		    $this->auth->confirmEmail($selector, $token);

		    $_SESSION['flash'] = true;

			$this->flash->success('your email was verified, thank you!');

		}
		catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Verification: Invalid token');
		    die(header('Location: /login'));
		}
		catch (\Delight\Auth\TokenExpiredException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Verification: Token expired');
		    die(header('Location: /login'));
		}
		catch (\Delight\Auth\UserAlreadyExistsException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Verification: Email address already exists');
		    die(header('Location: /login'));
		}
		catch (\Delight\Auth\TooManyRequestsException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Verification: Too many requests');
		    die(header('Location: /login'));
		}
	}

	// авторизует пользователя в системе
	public function login ($data)
	{
		$email = $data['email'];
		$password = $data['password'];
		$remember = $data['remember'];

		if ($remember == 1) {

			// если была нажата кнопка "запомнить меня", запоминает на 90 суток
		    $rememberDuration = (int) (60 * 60 * 24 * 90);
		}
		else {
		    $rememberDuration = null;
		}

		try {
		    $this->auth->login($email, $password, $rememberDuration);
		}
		catch (\Delight\Auth\InvalidEmailException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Wrong email address');
		    die(header('Location: /login'));
		}
		catch (\Delight\Auth\InvalidPasswordException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Wrong password');
		    die(header('Location: /login'));
		}
		catch (\Delight\Auth\EmailNotVerifiedException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Email not verified');
		    die(header('Location: /login'));
		}
		catch (\Delight\Auth\TooManyRequestsException $e) {
			$_SESSION['flash'] = true;
			$this->flash->error('Too many requests');
		    die(header('Location: /login'));
		}
	}

	// выход из системы
	public function logout ()
	{
		$this->auth->logOut();

		$this->auth->destroySession();
	}
}


