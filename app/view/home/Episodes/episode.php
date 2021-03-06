
<div class="body_content">
    <div class="title_content">
        <h4>Chapitre <?= $chapter->id ?></h4>
        <h2><?= $chapter->title ?></h2>
    </div>
    <div class="block">
        <p><?= $chapter->post ?></p>
    </div>
    <div class="news_date">
        <p>Publié le
            <span class="date">
                <?php
                $date = new DateTime($chapter->date_create);
                echo $date->format('d/m/Y');
                ?>
            </span>
        </p>
    </div>
</div>

<div class="comment">
    <div class="undertitle_content">
        <h2>Laisser un commentaire ?</h2>
    </div>
    <div class="form_flex">
        <p>Pour profiter des différents avantages du site, prenez le temps de vous inscrire. <a href="/Billet-Simple-Pour-Alaska/connect">Je m'inscris !</a></p>
    </div>
    <div class="comment_form">
        <form action="addcoms-chapitre-<?= $this->urlEncode($chapter->id) ?>" method="POST">

            <?php if(!isset($_SESSION['userName'])) {?>
            <div class="form_content">
                <label for="">E-mail</label>
                <input type="text" class="input_size" name="email" required>
            </div>
            <?php } ?>

            <div class="form_content">
                <label for="">Commentaire</label>
                <textarea name="postComment" id="commentPost" class="textarea_size" maxlength="500" required></textarea>
            </div>
            <div class="form_flex">
                <button type="submit">Envoyer</button>
            </div>

        </form>
    </div>
</div>

<div class="comment">
    <div class="undertitle_content news_flex">
        <h2>Les commentaires</h2>
        <p><?= $comCount->counts ?> Commentaire(s)</p>
    </div>

    <?php
    foreach($coms as $com){

        ?>
        <div class="comment_content">
            <div class="comment_body">
                <div class="title_content news_flex">
                    <h4><?=$com->author?></h4>
                    <p>Publié le
                        <span class="date">
                        <?php
                        $date = new DateTime($com->date);
                        echo $date->format('d/m/Y à H:i');
                        ?>
                    </span>
                    </p>
                </div>
                <div class="block">
                    <p><?=$com->comments?></p>
                </div>
                <form class="report" action="" method="post">
                    <button class="date" type="submit" name="idCom" value="<?= $this->urlEncode($com->id) ?>">Signaler</button>
                </form>
            </div>
        </div>
        <?php
    }
    ?>
</div>