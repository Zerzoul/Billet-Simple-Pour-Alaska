<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="public/css/style.css" />
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
            <nav>
                <?php include 'nav.php'; ?>
            </nav>
        </header>
        <section class="body">
            <?= $content ?>
        </section>
        <footer>
        <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>