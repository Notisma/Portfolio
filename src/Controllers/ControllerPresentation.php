<?php

namespace NP\Controllers;

use NP\Lib\Translation;

class ControllerPresentation extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView(self::getPageTitle(), "index/viewIndex");
    }
    
    public static function getPageTitle(): string
    {
        return Translation::translate('Accueil', 'Index');
    }
}