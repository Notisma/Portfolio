<?php

namespace NP\Controllers;

use NP\Lib\Translation;

class ControllerProjection extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView(Translation::getTitleElem_Projet(), "projection/viewIndex");
    }
}