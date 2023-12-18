<?php

namespace NP\Configuration;

use NP\Controllers\AbstractController;
use NP\Lib\Session;

class WebsiteConfiguration
{
    public const sessionUpTime = 7200;


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

}
