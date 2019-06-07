<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();


ob_start();
try {

    $app = \framework\App::getInstance();
    $router = new \framework\Router($_GET['url']);

    $router->getRoute('/', 'news', 'listNewsPost');
    $router->getRoute('/:id', 'news', 'newsPost');
    
    $router->getRoute('/episodes', 'episodes', 'listChapter');
    $router->getRoute('/about', 'about', 'getAboutPage');
//    $router->getRoute('/connect', 'connect', 'getTheForm');
    $route = $router->run();

    $getTheController = $app->getController($route['controller'], 'home');
    $method = $route['method'];
    $path = $route['path'];

    $param = null;
    if(isset($path['1'])){
        $param = $path['1'];
    }

    $getTheController->$method($param);

}
catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}

$content = ob_get_clean();
require 'app/view/home/template/layout.php';
