<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="portfolio raphaël izoret CV professionnal"/>

    <title>Portfolio - <?= $pageTitle ?></title>
    <link rel="icon" type="image/png" href="../ressources/images/website_icon.png"/>

    <link rel="stylesheet" href="../ressources/css/main.css"/>
    <link rel="stylesheet" href="../ressources/css/<?= $secondaryCSSpath ?>">
    <script src="../ressources/javascript/functions.js"></script>
</head>
<body>
<header>
    <h1>Raphaël Izoret - Portfolio : <?= $pageTitle ?></h1>
    <nav>
        <ul>
            <li><a href="?controller=Presentation&action=displayIndex">Présentation</a></li>
            <li><a href="?controller=CV&action=displayIndex">Mon CV</a></li>
            <li><a href="?controller=Projection&action=displayIndex">Projet Professionnel</a></li>
            <li><a href="?controller=Realisations&action=displayIndex">Mes réalisations</a></li>
        </ul>
    </nav>
</header>

<section id="subPage">
    <?php require __DIR__ . "/$path"; ?>
</section>

<footer>
    <p>--------------------<br/>Bye world (footer...)<br/>--------------------</p>
</footer>
</body>
</html>
