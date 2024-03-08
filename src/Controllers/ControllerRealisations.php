<?php

namespace NP\Controllers;

use NP\Lib\Translation;
use NP\Model\Repository\RealisationRepository;

class ControllerRealisations extends AbstractController
{
    public static function displayIndex(): void
    {
        $projects = (new RealisationRepository())->getDataObjectList();
        self::displayView(self::getPageTitle(), "realisations/viewIndex", [
            'projects' => $projects,
        ]);
    }

    public static function displayProjectDetails(): void
    {
        if (!isset($_GET['project'])) {
            self::displayError("Fournir un projet en get !");
            die();
        }
        $pid = $_GET['project'];
        if (is_null($proj = (new RealisationRepository())->getObjectFromPrimaryKey($pid))) {
            self::displayError("Fournir un vrai projet en get");
            die();
        }
        self::displayView($proj->title . Translation::translate(" (détails)", " (details)"), "realisations/details/viewGenericDetail", [
            'project' => $proj,
        ]);

    }
    
    public static function getPageTitle(): string
    {
        return Translation::translate('Mes Réalisations', 'My work');
    }
}
