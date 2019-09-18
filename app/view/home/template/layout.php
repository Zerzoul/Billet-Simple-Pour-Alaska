<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="Public/css/style.css"/>
    <meta charset=utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
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