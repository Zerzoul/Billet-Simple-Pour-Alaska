<div class="p-3 m-0">

    <div class="py-3">
        <div>
            <p >
                Vous êtes sur le point <?= $messageToValid ?>
            </p>
            <p>
                <?= $billetToDelete ?>
            </p>
        </div>
    </div>

    <div class="row mt-5 mx-1">
        <a href="billet-<?= $type ?>-<?= $id ?>" ><button type="button" class="btn btn-warning mr-5">Annuler</button></a>
        <form action="" method="post">
            <button type="button" class="btn btn-danger" onclick="submit();">Supprimer</button>
        </form>

    </div>

</div>
