<div class="nav">
    <div class="nav_list_content">
            <ul class="nav_list">
                <a href="/Billet-Simple-Pour-Alaska/"><li>News</li></a>
                <a href="episodes"><li>Episodes</li></a>
                <a href="about"><li>A propos</li></a>
                <?php $connection =  isset($_SESSION['userName']) ? 'deconnexion' : 'connexion' ;?>
                <a href="<?= $connection ?>"><li><?= ucfirst($connection) ?></li></a>
            </ul>
         </div>
    <div class="nav_shadow"></div>
</div>