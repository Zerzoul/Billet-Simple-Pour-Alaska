<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();

$app = \framework\App::getInstance();
$auth = new \framework\Authentification($app->getDb());

ob_start();
try {

    var_dump($_GET['url']);
    $router = $app->initRouter($_GET['url'], 'adminRoutes');

    $call = $router->run();
    $page = $app->getPage($call);
    $page->build('admin');

}
catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}

$content = ob_get_clean();
require 'app/view/admin/template/layout.php';

