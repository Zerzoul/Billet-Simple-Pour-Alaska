<h3>Ajouter un nouveau billet</h3>
<div class="container">

        <?php if(isset($error)){ ?>
    <div class="alert alert-danger">
            <?= $error ?>
    </div>
        <?php } ?>

    <form action="" method="POST">
        <div>
            <div class="row justify-content-between pa-0">
                    <?php
                        if($addBilletOnly){
                    ?>
                    <select name="type" class="form-control col-3" id="typeCheck" required>
                        <option value="">Type de billet :</option>
                        <option value="news">News</option>
                        <option value="episodes">Episodes</option>
                    </select>
                    <?php
                        }?>

                    <select name="statue" class="form-control col-3" id="typeCheck" required>
                        <option value="">Statue Publication :</option>
                        <option value="3">Brouillon</option>
                        <option value="2">A valider</option>
                        <option value="1">Publier</option>
                    </select>
            </div>
            <div>
                <?= $titleLabel ?>
                <?= $title ?>
            </div>


        </div>
        <div>
            <span>
                <?= $contentBilletTextarea ?>
            </span>
        </div>



        <div>
            <span>
                <?= $submit ?>
            </span>
        </div>

    </form>
</div>