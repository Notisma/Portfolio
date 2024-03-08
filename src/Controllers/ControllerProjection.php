<?php

namespace NP\Controllers;

use NP\Lib\Translation;

class ControllerProjection extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView(self::getPageTitle(), "projection/viewIndex");
    }
    
    public static function getPageTitle(): string
    {
        return Translation::translate('Qui suis-je', 'About me');
    }
}