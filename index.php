<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();


use \framework\Routerex;

ob_start();
try {
    $app = \framework\App::getInstance();
    $app->getDb();
    $app->getManager('news');


    if(isset($_GET['action'])){
        $page = new Routerex($_GET['action']);
        $page->run();
    } else {
        require 'app/view/home/News/news.php';
    }
}
catch (Exception $e){
    echo 'Erreur : '. $e->getMessage();
}
$content = ob_get_clean();
require 'app/view/home/template/layout.php';
