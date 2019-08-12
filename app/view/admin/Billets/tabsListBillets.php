<h5><?= ucfirst($typeSelected)?></h5>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
    </tr>
    </thead>


    <?php
    foreach ($listBillet as $billet)
    {
        ?>

        <tbody>
        <tr>
            <th scope="row"><?= $billet->id ?></th>
            <td><?php $date = new DateTime($billet->date_create);
                echo $date->format('d/m/Y à H:i'); ?></td>
            <td><?= $billet->title ?></td>
            <td>
                <a href="<?= $path ?>-<?= $type ?>-<?= $billet->id ?>" class="text-light">
                    <button class="btn btn-primary">
                       Voir
                    </button>
                </a>
            </td>
        </tr>
        </tbody>
        <?php
    }
    ?>

</table>