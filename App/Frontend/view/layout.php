<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
            <nav>
                <?php include 'nav.php'; ?>
            </nav>
        </header>
        <section>
            <?= $content ?>
        </section>
        <footer>
        <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>