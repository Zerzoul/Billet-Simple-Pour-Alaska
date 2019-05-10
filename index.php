<?php
require 'framework/lib/Autoloader.php';
\framework\Autoloader::register();

use \framework\Page;

require 'app/models/NewsManager.php';
use \Models\NewsManager;
$news = new NewsManager();
$news->getNewsPost();

ob_start();
try {


    if(isset($_GET['action'])){
        $page = new Page($_GET['action']);
        $page->getPage();
    } else {
        require 'app/view/home/News/news.php';
    }
}
catch (Exception $e){
    echo 'Erreur :'. $e->getMessage();
}

$content = ob_get_clean();
require 'app/view/home/template/layout.php';