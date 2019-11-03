<?php

namespace App\classes;

use R;

/* трейт для настройки сайдбара */ 

trait Sidebar
{
	// присваивает информацию для вывода блоку боковой панели. Позволяет не передавать эти данные в шаблон на каждой странице, где подключен этот блок
	protected function assignFrontSidebarData ()
	{
		$sidebar['latest_articles'] = $this->qb->getPaging(
			'articles', 
			[':limit' => 4, ':offset' => 0]
		);

		$this->templates->addData(['sidebar' => $sidebar], 'front/blocks/sidebar');
	}
}