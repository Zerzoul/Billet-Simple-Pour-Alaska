<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();


ob_start();
try {

    $app = \framework\App::getInstance();
    $router = $app->initRouter($_GET['url']);

    $call = $router->run();
    $page = $app->getPage($call);
    $page->build();

}
catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}

$content = ob_get_clean();
require 'app/view/home/template/layout.php';
