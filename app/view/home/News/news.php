<div class="news_content">
    <div class="news">
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
            <p><?= substr(strip_tags($new->post), 0, 255) ?>(...)</p>
        </div>
        <div class="news_infos_elmt news_flex">
            <p>
                <?= $coms->counts ?> Commentaire(s)
            </p>
            <a href="/Billet-Simple-Pour-Alaska/news-<?= $this->urlEncode($new->id) ?>">Lire la suite</a>
        </div>
    </div>

</div>
