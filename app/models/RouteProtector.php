<?php

namespace App\classes;

/* трейт для защиты закрытых разделов сайта от общего доступа */

trait RouteProtector
{
	// закрывает доступ к странице для пользователей с/без авторизации (в зависимости от того, что требуется в данный момент)
	protected function protectAuth (bool $needed_auth = true)
	{
		switch ($needed_auth) {
			case true:
				if(!(User::checkAuth())) die('Access error');
				break;
			case false:
				if(User::checkAuth()) die(header('Location: /home'));
				break;
		}
	}

	// закрывает доступ к админке тем, кто не является администратором или не авторизован
	protected function protectAdmin ()
	{
		if(!(User::checkAdmin()) || !(User::checkAuth())){
			die('Access error');
		}
	}
}