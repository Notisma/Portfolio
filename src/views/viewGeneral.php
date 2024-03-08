<?php

/** @var string $pageTitle */
/** @var stirng $secondaryCSSpath */

use NP\Configuration\WebsiteConfiguration as W;
use NP\Controllers\ControllerContact;
use NP\Controllers\ControllerCV;
use NP\Controllers\ControllerPresentation;
use NP\Controllers\ControllerProjection;
use NP\Controllers\ControllerRealisations;
use NP\Lib\Theme;
use NP\Lib\Translation as T;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="portfolio raphaël izoret CV professionnal">

    <title>Portfolio - <?= $pageTitle ?></title>
    <link rel="icon" type="image/png" href="<?= W::getSiteRoot() ?>/resources/images/icons/website_icon.png">

    <link rel="stylesheet" href="<?= W::getSiteRoot() ?>/resources/css/main.css">
    <link rel="stylesheet" href="<?= W::getSiteRoot() ?>/resources/css/text.css">
    <link rel="stylesheet" href="<?= W::getSiteRoot() ?>/resources/css/<?= $secondaryCSSpath ?>">

    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400;700&display=swap" rel="stylesheet">

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
                        href="?controller=Presentation&action=displayIndex"><?= ControllerPresentation::getPageTitle() ?></a>
            </div>
            <div class="sectionsMenuItem"><a
                        href="?controller=Projection&action=displayIndex"><?= ControllerProjection::getPageTitle() ?></a>
            </div>
            <div class="sectionsMenuItem"><a
                        href="?controller=CV&action=displayIndex"><?= ControllerCV::getPageTitle() ?></a>
            </div>
            <div class="sectionsMenuItem"><a
                        href="?controller=Realisations&action=displayIndex"><?= ControllerRealisations::getPageTitle() ?></a>
            </div>
            <div class="sectionsMenuItem"><a
                        href="?controller=Contact&action=displayIndex"><?= ControllerContact::getPageTitle() ?></a>
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
        <br>Aucun droit réservé
        <br><a href="' . W::getSourceCode() . '">Code source</a>'
            , '<br>Portfolio of Raphaël Izoret
        <br>No rights reserved
        <br><a href="' . W::getSourceCode() . '">Source code</a>'
        ) ?>
        <br>--------------------
    </p>
</footer>
</body>
</html>
