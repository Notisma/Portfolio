<?php

use NP\Configuration\WebsiteConfiguration as W;
use NP\Lib\Theme;
use NP\Lib\Translation as T;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="portfolio raphaël izoret CV professionnal">

    <title>Portfolio - <?= $pageTitle ?></title>
    <link rel="icon" type="image/png" href="<?= W::getSiteRoot() ?>/resources/images/website_icon.png">

    <link rel="stylesheet" href="<?= W::getSiteRoot() ?>/resources/css/main.css">
    <link rel="stylesheet" href="<?= W::getSiteRoot() ?>/resources/css/<?= $secondaryCSSpath ?>">

    <script src="<?= W::getSiteRoot() ?>/resources/javascript/general.js"></script>
    <script type="text/javascript">computeTheme("<?= Theme::getCurrentTheme() ?>");</script>
</head>
<body>
<header>
    <div id="iconsAndPageTitle">
        <div id="theme_icon_div">
            <a href="?action=switchTheme">
                <img id="theme_icon" alt="theme switching icon"
                     src="<?= W::getSiteRoot() ?>/resources/images/icons/theme_<?= Theme::getCurrentTheme() ?>.png">
            </a>
        </div>

        <h1>Raphaël Izoret - <?= $pageTitle ?></h1>

        <div id="language_icon_div">
            <img id="language_icon" alt="language switching icon"
                 src="<?= W::getSiteRoot() ?>/resources/images/icons/language_<?= T::getCurrentLanguage() ?>.png"
                 onclick="spawnLanguageDropdown()">
            <div id="language_dropdown" class="hide">
                <a href="?action=switchLanguage&lang=fr"><?= T::translate('Français', 'French') ?></a>
                <a href="?action=switchLanguage&lang=en"><?= T::translate('Anglais', 'English') ?></a>
            </div>
        </div>
    </div>
    <nav>
        <div id="sectionsMenu">
            <div class="sectionsMenuItem"><a
                        href="?controller=Presentation&action=displayIndex"><?= T::getTitleElem_Presentation() ?></a>
            </div>
            <div class="sectionsMenuItem"><a href="?controller=CV&action=displayIndex"><?= T::getTitleElem_CV() ?></a>
            </div>
            <div class="sectionsMenuItem"><a
                        href="?controller=Projection&action=displayIndex"><?= T::getTitleElem_Projet() ?></a></div>
            <div class="sectionsMenuItem"><a
                        href="?controller=Realisations&action=displayIndex"><?= T::getTitleElem_Realisations() ?></a>
            </div>
        </div>
    </nav>
</header>

<section id="subPage">
    <?php require __DIR__ . "/$path"; ?>
</section>

<footer>
    <p>--------------------
        <?= T::translate(
            '<br>Portfolio de Raphaël Izoret
        <br>Tous droits réservés
        <br><a href="' . W::getSourceCode() . '">Code source</a>'
            , '<br>Portfolio of Raphaël Izoret
        <br>All rights reserved
        <br><a href="' . W::getSourceCode() . '">Source code</a>'
        ) ?>
        <br>--------------------
    </p>
</footer>
</body>
</html>
