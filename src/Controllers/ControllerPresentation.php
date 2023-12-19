<?php

namespace NP\Controllers;

class ControllerPresentation extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView("Présentation", "presentation/viewIndex");
    }
}