<?php

require_once __DIR__ . '/../src/Lib/Psr4AutoloaderClass.php';

// initialisation
$loader = new NP\Lib\Psr4AutoloaderClass();
$loader->register();
// enregistrement d'une association "namespace" → "dossier"
$loader->addNamespace('NP', __DIR__ . '/../src');

use NP\Controllers\AbstractController as CGlobal;

if (isset($_GET['controller'])) {
    $controller = ucfirst($_GET["controller"]);
} else {
    $controller = "Presentation";
}

if (isset($_GET['action'])) {
    $action = lcfirst($_GET["action"]);
} else {
    $action = "displayIndex";
}

$nomClasseController = "NP\Controllers\Controller$controller";

if (class_exists($nomClasseController)) {
    if (in_array($action, get_class_methods($nomClasseController))) {
        $nomClasseController::$action();
    } else
        CGlobal::displayError("L'action \"$action\" n'existe pas dans le contrôleur \"$nomClasseController\"");
} else
    CGlobal::displayError("Le contrôleur \"$nomClasseController\" n'existe pas");
