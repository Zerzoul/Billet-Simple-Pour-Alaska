
<div class="nav-wrap">
    <a href="#wrap" id="open">
        <svg class="bars-nav-wrap-menu" viewBox="0 0 24 24">
            <path fill="#000000" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
        </svg>
    </a>
</div>
<div class="nav" id="wrap">
    <div class="nav_list_content">
        <a href="#" id="close">
            <svg class="close-nav-wrap-menu" viewBox="0 0 24 24">
                <path fill="#000000" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
            </svg>
        </a>
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
