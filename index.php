<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();

if(isset($_GET['url'])){$var = $_GET['url']; $route = 'publicRoutes'; $direction = 'home';}
if(isset($_GET['action']) || $_GET['url'] === 'index.php'){$var = $_GET['action']; $route = 'adminRoutes'; $direction = 'admin';}

session_start();
ob_start();
try {

    $app = \framework\App::getInstance();
    $router = $app->initRouter($var, $route);
    $call = $router->run();
    $page = $app->getPage($call);
    $page->build($direction);

}
catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}

$content = ob_get_clean();
require 'app/view/'.$direction.'/template/layout.php';

