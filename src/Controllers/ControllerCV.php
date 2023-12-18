<?php

namespace NP\Controllers;

class ControllerCV extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView("CV", "cv/viewIndex.php");
    }
}