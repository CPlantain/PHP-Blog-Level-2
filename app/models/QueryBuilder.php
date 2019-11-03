<?php

namespace App\classes;

use App\classes\Connection;
Use R;

/* построитель запросов. Работает на основе RedBeanPHP */

class QueryBuilder
{
	private $relations;
	
	public function __construct (array $relations, Connection $connection)
	{
		$connection->RBsetup();

		$this->relations = $relations;
	}

	// собирает кастомный джойн запрос на вывод по шаблону
	private function buildJoinSelect ($table, $fields, $paging, $condition, $order = "")
	{
		// джойнит все таблицы с которыми есть связи
		$relations = $this->relations[$table];
		$t = $table[0];

		// устанавливает порядок вывода записей
		if(empty($order)) $order = "{$t}.id DESC";
		if(!empty($condition)) $condition = "WHERE " . $condition;

		// собирает строку с джойнами
		foreach($relations as $rel_table => $link) {
			$joins .= "LEFT JOIN {$rel_table} ON {$t}.{$link[0]} = {$rel_table}.{$link[1]} ";
		}

		if($paging === 'paging'){

			// если нужен постраничный вывод, запрос будет построен по такому шаблону
			return "SELECT {$t}.*, {$fields}
			FROM {$table} as {$t}
			{$joins}
			{$condition}
			GROUP BY {$t}.id
			ORDER BY {$order} 
			LIMIT :offset, :limit";
		} else {
			return "SELECT {$t}.*, {$fields}
			FROM {$table} as {$t}
			{$joins} 
			{$condition} 
			GROUP BY {$t}.id
			ORDER BY {$order}";
		}	
	}

	// собирает кастомный джойн запрос на удаление записей
	private function buildJoinDelete ($table, $rel_table, $condition)
	{
		$links = $this->relations[$table][$rel_table];

		return "DELETE {$table}, {$rel_table} 
			FROM {$table}
			LEFT JOIN {$rel_table} ON {$table}.{$links[0]} = {$rel_table}.{$links[1]}
			{$condition}";
	}

	// возвращает записи одной таблицы с постраничным выводом
	public function getPaging ($table, $binds = [])
	{
		return R::findAll($table, 'ORDER BY id DESC LIMIT :offset, :limit', $binds);	
	}	

	// выполняет и возвращает результат джойн запроса SELECT
	public function getAllJoined ($table, $fields, $binds = [], $condition = "", $paging = "", $order = "")
	{
		if ($condition === 'paging'){
			$paging = $condition;
			$condition = '';
		} 

		$query = $this->buildJoinSelect($table, $fields, $paging, $condition, $order);

		$rows = R::getAll($query, $binds);

		return R::convertToBeans($table, $rows);
	}

	// создаёт новую запись
	public function create ($table, $data)
	{
		$row = R::dispense($table);

		foreach ($data as $column => $value) $row->$column = $value;

		return R::store($row);
	}

	// обновляет одну запись по идентификатору
	public function updateById ($table, $id, $data)
	{
		$row = R::load($table, $id);

		foreach ($data as $column => $value) $row->$column = $value;

		return R::store($row);
	}

	// принимает массив с бинами записей и обновляет их
	public function updateAll ($beans, $data)
	{
		foreach ($beans as $bean) {
			foreach ($data as $column => $value) {
				$bean->$column = $value;
			}
		}

		return R::storeAll($beans);
	}

	// удаляет одну запись по идентификатору
	public function deleteById ($table, $id)
	{
		$row = R::load($table, $id);
		return R::trash($row);
	}

	// выполняет джойн запрос DELETE
	public function deleteJoined ($table, $rel_table, $condition = "", $binds = [])
	{
		$query = $this->buildJoinDelete($table, $rel_table, $condition);

		return R::getAll($query, $binds);
	}
}