<?php

namespace NP\Controllers;

class ControllerRealisations extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView("Réalisations", "realisations/viewIndex");
    }
}