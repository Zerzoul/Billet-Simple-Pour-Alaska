<div class="body_content">
    <div class="synopsis_content">
        <div class="synopsis_content_flex">
            <img src="public/images/couverture.jpg" alt="converture Billet Simple Pour l'Alaska">
        </div>
        <div class="undertitle_content">
            <h2>Synopsis</h2>
        </div>
        <div class="block">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et augue a libero finibus ultricies. Sed ligula elit, imperdiet in suscipit eget, varius sit amet magna. Fusce commodo dui vel turpis congue, sit amet sollicitudin magna volutpat. Phasellus vel nisi et magna dignissim lacinia consectetur ut nisi. Phasellus sed enim ut ligula cursus feugiat ac ut ipsum. Cras eget lorem efficitur, consequat metus sed, lobortis nulla. Aenean non mi tempus orci dignissim placerat. In gravida nibh a ipsum finibus feugiat. Phasellus tellus ipsum, posuere ut enim at, tempus efficitur odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin magna mauris, posuere blandit tortor et, blandit sollicitudin leo. Ut nec ultricies nunc. Fusce et ultrices turpis, ut vulputate neque. Sed fermentum, lorem id porta condimentum, erat dui ultricies dolor, et consequat erat orci in mauris.</p>
        </div>
        <div class="synopsis_content_flex btn_synopsis_elmnt">
            <h2>Commencer la lecture !</h2>
        </div>
    </div>

</div>
<div class="body_content">

    <div class="undertitle_content">
        <h2>Chapitres</h2>
    </div>
    <?php
        foreach ($episodes as $episode) {

            ?>
            <div class="episode_table_content undertitle_content">
                <div>
                    <p>Publié le <span class="date"><?php
                            $date = new DateTime($episode->date_create);
                            echo $date->format('d/m/Y');
                            ?></span></p>
                </div>
                <div class="resume">
                    <h3>Chapitre <?= $episode->id ?> - <?= $episode->title ?></h3>
                </div>
                <div class="btn_elmt">
                    <a href="/Billet-Simple-Pour-Alaska/chapitre-<?= $this->urlEncode($episode->id) ?>"><p>Lire</p></a>
                </div>
            </div>
            <?php
        }
    ?>

</div>