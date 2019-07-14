<div class="p-3 m-0">
    <div class="row justify-content-between">
        <div class="col-4">
            <p class="font-weight-bold">Type</p>
        </div>

        <div class="col-4 text-right">
            <p class="font-weight-bold p-0 m-0">
                Date de création
            </p>
            <p class="p-0 m-0">
                <?php $date = new DateTime($actionBillet->date_create);
                echo $date->format('d/m/Y'); ?>
            </p>
        </div>
    </div>

    <div class="py-3">
        <div>
            <h5><?= $actionBillet->title ?></h5>
        </div>
        <div class="font-weight-bold">
            Resume / review
        </div>
        <div>
            <p >
                <?= $actionBillet->post ?>
            </p>
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col-4">
            <p class="font-weight-bold m-0">Statue</p>
            <p class="p-0 m-0"> <?= $statue ?> </p>
        </div>

        <?php
        if(!is_null($actionBillet->date_modif)){
            ?>
        <div class="col-4 text-right">
            <p class="font-weight-bold m-0">Date de modification</p>
            <p class="p-0 m-0"> La date</p>
        </div>
        <?php
        }
        ?>
    </div>

    <div class="row justify-content-between mt-5 mx-1">
        <button type="button" class="btn btn-warning">Modification</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
    </div>

</div>
