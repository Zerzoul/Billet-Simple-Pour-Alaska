<?php
require 'app/models/NewsManager.php';
use \models\NewsManager;

$news = new NewsManager();
$news = $news->getListNews();
foreach($news as $new){
?>

<div class="news_content">
    <div class="title_content news_flex">
        <h2>
            <?= $new->title ?>
        </h2>
        <p>Publiée le <span class="date">
            <?php
                $date = new DateTime($new->date_create);
                echo $date->format('d/m/Y H:i');
            ?>
        </span></p>
    </div>

    <div class="block">
        <p><?= $new->post ?></p>
    </div>
    <div class="news_infos_elmt news_flex">
        <p>0 Commentaire</p>
        <a href="index.php?action=newt&amp;id=<?= $new->id ?> ">Lire la suite</p>
    </div>
</div>

<?php

}
?>