<?php

namespace NP\Controllers;

abstract class AbstractController
{
    protected static function displayView(string $pageTitle, string $viewPath, array $parameters = []): void
    {
        $cssPath = str_replace('view', 'style', $viewPath);
        $cssPath = str_replace('.php', '.css', $cssPath);

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

    public static function displayError(string $error): void
    {
        self::displayView("Error", 'viewError.php', [
            'errorStr' => $error
        ]);
    }

}
