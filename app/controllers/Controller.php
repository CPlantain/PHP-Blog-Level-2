<?php

namespace App\controllers;

use \Tamtamchik\SimpleFlash\Flash;
use App\classes\RouteProtector;
use App\classes\QueryBuilder;
use League\Plates\Engine;
use App\classes\User;

class Controller
{
	use RouteProtector;

	protected $templates;
	protected $flash;
	protected $user;
	protected $qb;

	public function __construct (Engine $engine, Flash $flash, User $user, QueryBuilder $qb)
	{
		$this->templates = $engine;
		$this->flash = $flash;
		$this->user = $user;
		$this->qb = $qb;
	}
}