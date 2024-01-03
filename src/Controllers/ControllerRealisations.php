<?php

namespace NP\Controllers;

use NP\Lib\Translation;

class ControllerRealisations extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView(Translation::getTitleElem_Realisations(), "realisations/viewIndex");
    }
}