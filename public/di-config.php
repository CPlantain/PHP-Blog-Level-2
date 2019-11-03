<?php

use App\classes\QueryBuilder;
use App\classes\Connection;
use League\Plates\Engine;

return [
	Engine::class => function ()
	{
		return new Engine('../app/views');
	},

	Connection::class => function ()
	{
		$config = [
			'database' => 'blog_oop',
			'username' => 'root',
			'password' => '',
			'connection' => 'mysql:host=127.0.0.1',
			'charset' => 'utf8',
			'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
		];

		return new Connection($config);
	},

    QueryBuilder::class => function ()
    {
        // связи таблиц для джойнов
        $relations = [
            'articles' => [
                'categories' => ['category_id', 'id'], 
                'users' => ['user_id', 'id'],
                'comments' => ['id', 'article_id']
            ],

            'categories' => [
                'articles' => ['id', 'category_id']
            ],

            'users' => [
                'comments' => ['id', 'user_id']
            ],
            
            'comments' => [
                'articles' => ['article_id', 'id'], 
                'users' => ['user_id', 'id']
            ]
        ];

        $config = [
            'database' => 'blog_oop',
            'username' => 'root',
            'password' => '',
            'connection' => 'mysql:host=127.0.0.1',
            'charset' => 'utf8',
            'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        ];

        return new QueryBuilder($relations, new Connection($config));
    }
];