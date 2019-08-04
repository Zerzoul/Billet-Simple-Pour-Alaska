<div class="p-3 m-0">

    <div class="py-3">
        <div>
            <p >
                Vous êtes sur le point <?= $messageToValid ?>
            </p>
            <p class="font-weight-bold">
                <?= $billetToDelete ?>
            </p>
        </div>
    </div>

    <div class="row mt-5 mx-1">
        <form action="" method="post">
            <input type="submit" name="validationDeleteBillet" value="Annuler" class="btn btn-warning mr-5" />
            <input type="submit" name="validationDeleteBillet" value="Supprimer" class="btn btn-danger" />
        </form>

    </div>

</div>
