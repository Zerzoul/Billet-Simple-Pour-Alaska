<?php
require '../Lib/Factory/Autoloader.php';
\Factory\Autoloader::register();


ob_start();
if(isset($_GET['action'])){
    if($_GET['action'] == 'new'){
        require '../App/Frontend/View/News/new.php';
    }
    if($_GET['action'] == 'episode'){
        require '../App/Frontend/View/Episodes/episode.php';
    }
    if($_GET['action'] == 'about'){
        require '../App/Frontend/View/About/about.php';
    }
    if($_GET['action'] == 'connect'){
        require '../App/Frontend/View/Connexion/connect.php';
    }
} else {
    require '../App/Frontend/View/News/news.php';
}
$content = ob_get_clean();


require '../App/Frontend/View/layout.php';