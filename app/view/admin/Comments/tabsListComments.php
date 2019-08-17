<h5><?= ucfirst($typeSelected)?></h5>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Statue</th>
        <th scope="col">Date</th>
        <th scope="col">Auteur</th>
        <th scope="col">Commentaire sur ?</th>
    </tr>
    </thead>


    <?php
    foreach ($listCom as $com)
    {
        ?>

        <tbody>
        <tr>
            <th scope="row"><?= $com->id ?></th>
            <td><div>rond</div></td>
            <td><?php $date = new DateTime($com->date);
                echo $date->format('d/m/Y à H:i'); ?></td>
            <td><?= $com->author ?></td>
            <td><?= $com->news_id ?></td>
            <td>
                <a href="<?= $path ?>-<?= $type ?>-<?= $com->news_id ?>" class="text-light">
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