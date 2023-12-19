<?php

namespace NP\Configuration;

use NP\Controllers\AbstractController;
use NP\Lib\Session;
use RuntimeException;

class WebsiteConfiguration
{
    public const sessionUpTime = 7200;

    static public function getSiteRoot(): string
    {
        if ($_SERVER["HTTP_HOST"] == "webinfo.iutmontp.univ-montp2.fr")
            return '/~izoretr/nots_portfolio';
        else if ($_SERVER['SERVER_PORT'] == 2023)
            return '';
        else
            throw new RuntimeException("Site root configuration non-trouvée !");
    }

    public static function getCurrentTheme(): string
    {
        if (!Session::getInstance()->contains('theme'))
            Session::getInstance()->register('theme', 'light');

        return Session::getInstance()->read('theme');
    }
    public static function switchTheme(): void
    {
        $curr = self::getCurrentTheme();
        if ($curr == 'light') Session::getInstance()->register('theme', 'dark');
        else if ($curr == 'dark') Session::getInstance()->register('theme', 'light');
        else AbstractController::displayError("Erreur de session (thème light/dark)");
    }

    public static function getCurrentLanguage(): string
    {
        if (!Session::getInstance()->contains('language'))
            Session::getInstance()->register('language', 'fr');

        return Session::getInstance()->read('language');
    }
    public static function setLanguage(string $lang): void
    {
        Session::getInstance()->register('language', $lang);
    }

}
