<?php

namespace App\classes;

use R;
use PDO;

/* класс, отвечающий за подключение к базе данных */

class Connection 
{
	private $config;

	public function __construct (array $config)
	{
		$this->config = $config;
	}

	// настраивает подключение для RedBean
	public function RBsetup ()
	{
		$config = $this->config;

		R::setup(
			"{$config['connection']};dbname={$config['database']}", 
			$config['username'], 
			$config['password']
		);

		if(!R::testConnection()) die("Can not connect to the database");
	}
	
	// настраивает и возвращает объект PDO. Нужен для компонентов, использующих PDO в своей работе.
	public function makePDO ()
	{
		try{

			$config = $this->config;

			return new PDO(
				"{$config['connection']};dbname={$config['database']};charset={$config['charset']};", 
				$config['username'], 
				$config['password'],
				$config['options']
			);

		}catch(PDOException $e){
			die("Can not connect to the database");
		}
	}
}