<h5>List of billet</h5>
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
    foreach ($listBillet as $new)
    {
        ?>

        <tbody>
        <tr>
            <th scope="row"><?= $new->id ?></th>
            <td><?php $date = new DateTime($new->date_create);
                echo $date->format('d/m/Y à H:i'); ?></td>
            <td><?= $new->title ?></td>
            <td>
                <a href="billet-<?= $new->id ?>" class="text-light">
                    <button class="btn btn-primary">
                       Check
                    </button>
                </a>
            </td>
        </tr>
        </tbody>
        <?php
    }
    ?>

</table>