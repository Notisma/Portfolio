<?php

namespace NP\Controllers;

use NP\Lib\Translation;
use NP\Model\Repository\SkillRepository;

class ControllerContact extends AbstractController
{

    public static function displayIndex(): void
    {
        self::displayView(self::getPageTitle(), "contact/viewIndex");
    }

    public static function getPageTitle(): string
    {
        return "Contact";
    }
}