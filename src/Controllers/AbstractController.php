<?php

namespace NP\Controllers;

use JetBrains\PhpStorm\NoReturn;
use NP\Configuration\WebsiteConfiguration;
use NP\Lib\Translation;

abstract class AbstractController
{
    protected static function displayView(string $pageTitle, string $viewPath, array $parameters = []): void
    {
        $cssPath = str_replace('view', 'style', $viewPath);
        $cssPath = str_replace('.php', '.css', $cssPath);

        if (!file_exists(__DIR__ . "/../views/" . $viewPath . '.php'))
            $viewPath .= '_' . Translation::getCurrentLanguage();
        $viewPath .= '.php';

        $params = array_merge(
            [
                'pageTitle' => $pageTitle,
                'path' => $viewPath,
                'secondaryCSSpath' => $cssPath
            ],
            $parameters
        );
        extract($params);
        require __DIR__ . "/../views/viewGeneral.php"; // Charge la view
    }

    public abstract static function displayIndex();

    #[NoReturn] public static function switchTheme(): void
    {
        WebsiteConfiguration::switchTheme();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
    #[NoReturn] public static function switchLanguage(): void
    {
        if (!isset($_GET['lang'])) {
            self::displayError("Pas de langue en POST...");
            die();
        }
        $lang = $_GET['lang'];
        if ($lang != 'fr' && $lang != 'en') {
            self::displayError("Mauvaise langue !");
            die();
        }
        Translation::setLanguage($lang);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    public static function displayError(string $error): void
    {
        self::displayView("Error", 'viewError', [
            'errorStr' => $error
        ]);
    }

}
