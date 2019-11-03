<?php

namespace App\classes;

use JasonGrimes\Paginator;
use R;

/* небольшой трейт для настройки постраничного вывода */

trait Paging
{
	private $totalItems;
	private $itemsPerPage;
	private $currentPage;
	private $pageFirstPost;
	private $urlPattern;

	// выставляет настройки объекта Paginator и возвращает его
	protected function setPaging (string $table, int $itemCount, string $urlVar)
	{
		$this->totalItems = R::count($table);
		$this->itemsPerPage = $itemCount;
		$this->currentPage = $_GET[$urlVar] ?? 1;
		$this->pageFirstPost = ($this->currentPage - 1) * $this->itemsPerPage;
		$this->urlPattern = "?$urlVar=(:num)";

		return new Paginator(
			$this->totalItems, 
			$this->itemsPerPage, 
			$this->currentPage, 
			$this->urlPattern
		);
	}

	// возвращает значения лимита и отступа для sql-запроса
	protected function getPagingInfo ()
	{
		return ['limit' => $this->itemsPerPage, 'offset' => $this->pageFirstPost];
	}
}