<?php

namespace NP\Controllers;

use NP\Lib\Translation;

class ControllerPresentation extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView(Translation::getTitleElem_Presentation(), "index/viewIndex");
    }
}