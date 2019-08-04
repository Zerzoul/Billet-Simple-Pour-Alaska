<h5>Liste des utilisateurs</h5>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Pseudonyme</th>
        <th scope="col">Email</th>
        <th scope="col">Date d'inscription</th>
        <th scope="col">Nbr Commentaire</th>
    </tr>
    </thead>


    <?php
    foreach ($users as $user)
    {
        ?>

        <tbody>
        <tr>
            <th scope="row"><?= $user->id ?></th>
            <td><?= $user->pseudo ?></td>
            <td> <?php $date = new DateTime($user->date_sign);
                echo $date->format('d/m/Y'); ?></td>
            <td><?= $user->email ?></td>
            <td><?= $userCount->userCount ?></td>
        </tr>
        </tbody>
        <?php
    }
    ?>

</table>