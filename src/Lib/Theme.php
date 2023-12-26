<?php

namespace NP\Lib;

use NP\Controllers\AbstractController;

class Theme
{
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