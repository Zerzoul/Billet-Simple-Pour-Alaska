<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();


ob_start();
try {

    $app = \framework\App::getInstance();
    $router = new \framework\Router($_GET['url']);

    $router->getRoute('/', 'news', 'listNewsPost');
    $router->getRoute('/new/:id', 'news', 'listNewsPost');
    
    $router->getRoute('/episodes', 'episodes', 'listChapter');
    $router->getRoute('/about', 'about', 'getAboutPage');
//    $router->getRoute('/connect', 'connect', 'getTheForm');
    $route = $router->run();

    $getTheController = $app->getController($route['controller'], 'home');
    $method = $route['method'];
    $getTheController->$method();

}
catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}

$content = ob_get_clean();
require 'app/view/home/template/layout.php';
