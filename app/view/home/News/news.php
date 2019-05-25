<?php
$news = $app->getManager('news');
$comments = $app->getManager('Comments');
$news = $news->getListNews();


foreach ($news as $new) {

    $coms = $comments->countComs($new->id);
    foreach ($coms as $com) {


        ?>
        <div class="news_content">
            <div class="title_content news_flex">
                <h2>
                    <?= $new->title ?>
                </h2>
                <p>Publiée le <span class="date">
            <?php
            $date = new DateTime($new->date_create);
            echo $date->format('d/m/Y à H:i');
            ?>
        </span></p>
            </div>

            <div class="block">
                <p><?= $new->post ?></p>
            </div>
            <div class="news_infos_elmt news_flex">
                <p>
                                <?= $com->counts ?>
                    Commentaire(s)</p>
                <a href="index.php?action=new&amp;id=<?= $new->id ?> ">Lire la suite</p></a>
            </div>
        </div>
        <?php
    }
}
?>