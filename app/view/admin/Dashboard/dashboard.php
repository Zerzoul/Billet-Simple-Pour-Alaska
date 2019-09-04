<div class="container mt-5">
    <div class="justify-item-center">
        <h2>DashBoard</h2>
        <div class="border mb-2 p-1">
            <h3>Billets</h3>
            <div>
                <h5>Billet en cours d'écriture</h5>
                <p> Vous avez <span class="font-weight-bold"><?= $billetRough?></span> Billets en cours d'éciture.</p>
            </div>
            <div>
                <h5>Billet en cours de validation</h5>
                <p> Vous avez <span class="font-weight-bold"><?= $billetToValidate ?></span> Billets en cours de validation.</p>
            </div>
            <div>
                <h5>Billet publié</h5>
                <p> Vous avez <span class="font-weight-bold"><?= $billetPublished ?></span> publié.</p>
            </div>
        </div>
        <div class="border p-1">
            <h3>Commentaires</h3>
            <div>
                <h5>Nouveau commentaire</h5>
                <p> Vous avez <span class="font-weight-bold">3</span> nouveau commentaire à valider</p>
            </div>
            <div>
                <h5>Commentaire signalé</h5>
                <p> Vous avez <span class="font-weight-bold">3</span> commentaire signalé</p>
            </div>
       </div>


    </div>
</div>
