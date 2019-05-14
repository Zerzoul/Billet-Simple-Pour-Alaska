<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();

use \framework\Routerex;
use \framework\Manager;

$dsn = array(
    'name' => 'billetsimplepouralaska',
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'root'
);

ob_start();
try {

    $dbConnect = new Manager();
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
