<h3>Ajouter un nouveau billet</h3>
<div>

        <?php if(isset($error)){ ?>
    <div class="alert alert-danger">
            <?= $error ?>
    </div>
        <?php } ?>

    <form action="" method="POST">
        <div>
            <select name="type" class="form-control col-3" id="typeCheck">
                <option value="">Type :</option>
                <option value="news">News</option>
                <option value="episodes">Episodes</option>
            </select>

            <span><?= $titleLabel ?></span>
            <span><?= $title ?></span>

        </div>
        <div>
            <span>
                <?= $contentBilletTextarea ?>
            </span>
        </div>

        <div>
            <select name="statue" class="form-control col-3" id="typeCheck">
                <option value="">Statue :</option>
                <option value="3">Brouillon</option>
                <option value="2">A valider</option>
                <option value="1">Publier</option>
            </select>
        </div>

        <div>
            <span>
                <?= $submit ?>
            </span>
        </div>

    </form>
</div>