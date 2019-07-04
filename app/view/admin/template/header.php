<div class="p-3 mb-2 bg-info text-white">
    <?php
    if(isset($_SESSION['admin'])){
    ?>
    <div class="row justify-content-end">
        <div class="col-3">
            Welcome <?= $_SESSION['admin'] ?> <a href="?action=deconnexion" class="text-warning stretched-link">Deconnexion</a>
        </div>
    </div>
        <?php
    }
    ?>
</div>