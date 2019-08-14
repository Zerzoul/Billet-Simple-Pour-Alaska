
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
                <?= $coms->counts ?> Commentaire(s)
            </p>
            <a href="/Billet-Simple-Pour-Alaska/news-<?= $new->id ?>">Lire la suite</p></a>
        </div>
    </div>
