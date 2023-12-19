<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="portfolio raphaël izoret CV professionnal"/>

    <title>Portfolio - <?= $pageTitle ?></title>
    <link rel="icon" type="image/png" href="<?= W::getSiteRoot() ?>/ressources/images/website_icon.png"/>

    <link rel="stylesheet" href="<?= W::getSiteRoot() ?>/ressources/css/main.css"/>
    <link rel="stylesheet" href="<?= W::getSiteRoot() ?>/ressources/css/<?= $secondaryCSSpath ?>">

    <script src="<?= W::getSiteRoot() ?>/ressources/javascript/general.js"></script>
    <script type="text/javascript">computeTheme("<?= W::getCurrentTheme() ?>");</script>

</head>
<body>
<header>
    <div id="iconsAndPageTitle">
        <a href="?action=SwitchTheme">
            <img id="theme_icon" alt="theme switching icon"
                 src="<?= W::getSiteRoot() ?>/ressources/images/icons/theme_<?= W::getCurrentTheme() ?>.png"/>
        </a>

        <h1>Raphaël Izoret - <?= $pageTitle ?></h1>

        <div id="language_icon_div">
            <img id="language_icon" alt="language switching icon"
                 src="<?= W::getSiteRoot() ?>/ressources/images/icons/language_<?= W::getCurrentLanguage() ?>.png"
                 onclick="spawnLanguageDropdown()"/>
            <div id="language_dropdown" class="hide">
                <a href="?action=switchLanguage&lang=fr">Français</a>
                <a href="?action=switchLanguage&lang=en">Anglais</a>
            </div>
        </div>
    </div>
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
