<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();


ob_start();
try {
    $app = \framework\App::getInstance();
    $router = new \framework\Router($_GET['url']);

    $router->getRoute('/', 'news');
    $router->getRoute('/episodes', 'episode');
    $router->getRoute('/about', 'about');
    $router->getRoute('/connect', 'connect');
    $route = $router->run();

    $getNewsList = $app->getController($route['controller'], 'home');
    $getNewsList->listNewsPost();

}
catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}

$content = ob_get_clean();
require 'app/view/home/template/layout.php';
