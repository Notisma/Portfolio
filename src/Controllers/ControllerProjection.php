<?php

namespace NP\Controllers;

class ControllerProjection extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView("Projet Pro", "projection/viewIndex.php");
    }
}