<?php
if( !session_id() ) @session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../libs/rb/rb.php';

use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder;

// настройки контейнера PHP DI
$containerBuilder->addDefinitions('di-config.php');

$container = $containerBuilder->build();


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    // виды фронт
    $r->addRoute('GET', '/', ['App\controllers\HomeController', 'homepage']);
    $r->addRoute('GET', '/home[/{page:\d+}]', ['App\controllers\HomeController', 'homepage']);
    $r->addRoute('GET', '/category[/{id:\d+}]', ['App\controllers\HomeController', 'category']);
    $r->addRoute('GET', '/article[/{id:\d+}]', ['App\controllers\HomeController', 'singlePage']);
    $r->addRoute('GET', '/register', ['App\controllers\HomeController', 'registerForm']);
    $r->addRoute('GET', '/login', ['App\controllers\HomeController', 'loginForm']);

    // обработчики фронт
    $r->addRoute('POST', '/register-handler', ['App\controllers\HandlerController', 'registerHandler']);
    $r->addRoute('POST', '/login-handler', ['App\controllers\HandlerController', 'loginHandler']);
    $r->addRoute('GET', '/logout', ['App\controllers\HandlerController', 'logoutHandler']);
    $r->addRoute('GET', '/verify[/{selector}[/{token}]]', ['App\controllers\HandlerController', 'verifyHandler']);
    $r->addRoute('POST', '/add-comment', ['App\controllers\HandlerController', 'addCommentHandler']);


    $r->addGroup('/admin', function (FastRoute\RouteCollector $r) {
        // виды админки
        $r->addRoute('GET', '', ['App\controllers\AdminController', 'main']);
        $r->addRoute('GET', '/', ['App\controllers\AdminController', 'main']);
        $r->addRoute('GET', '/articles', ['App\controllers\AdminController', 'articles']);
        $r->addRoute('GET', '/categories', ['App\controllers\AdminController', 'categories']);
        $r->addRoute('GET', '/users', ['App\controllers\AdminController', 'users']);
        $r->addRoute('GET', '/comments', ['App\controllers\AdminController', 'comments']);
        $r->addRoute('GET', '/add-article', ['App\controllers\AdminController', 'addArticle']);
        $r->addRoute('GET', '/edit-article[/{id:\d+}]', ['App\controllers\AdminController', 'editArticle']);
        $r->addRoute('GET', '/add-category', ['App\controllers\AdminController', 'addCategory']);
        $r->addRoute('GET', '/edit-category[/{id:\d+}]', ['App\controllers\AdminController', 'editCategory']);

        // обработчики админки
        $r->addRoute('POST', '/add-category-handler', ['App\controllers\AdminHandlerController', 'addCategoryHandler']);
        $r->addRoute('POST', '/edit-category-handler', ['App\controllers\AdminHandlerController', 'editCategoryHandler']);
        $r->addRoute('POST', '/add-article-handler', ['App\controllers\AdminHandlerController', 'addArticleHandler']);
        $r->addRoute('POST', '/edit-article-handler', ['App\controllers\AdminHandlerController', 'editArticleHandler']);

        $r->addRoute('GET', '/delete-article[/{id:\d+}]', ['App\controllers\AdminHandlerController', 'deleteArticleHandler']);
        $r->addRoute('GET', '/delete-category[/{id:\d+}]', ['App\controllers\AdminHandlerController', 'deleteCategoryHandler']);
        $r->addRoute('GET', '/delete-user[/{id:\d+}]', ['App\controllers\AdminHandlerController', 'deleteUserHandler']);
        $r->addRoute('GET', '/delete-comment[/{id:\d+}]', ['App\controllers\AdminHandlerController', 'deleteCommentHandler']);
    });
});


// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
    	echo "404";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo "405 not allowed";
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars

        $class = $handler[0];
        $method = $handler[1];

        $container->call([$class, $method], $vars);
        // call_user_func([$class, $method], $vars);

        break;
}