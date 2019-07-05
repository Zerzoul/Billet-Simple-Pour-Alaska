<div>
    <h3>List of billet</h3>
    <div>
        <div class="row">
            <div>
                <h5>List of billet</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Title</th>
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
                                <button class="btn btn-primary">
                                    Check
                                </button>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                    }
                   ?>

                </table>
            </div>
            <div>
                <h5>action on one billet</h5>
            </div>
        </div>
    </div>
</div>