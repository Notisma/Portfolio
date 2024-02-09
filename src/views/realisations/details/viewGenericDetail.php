<?php
/** @var Realisation $project */

use NP\Lib\Translation;
use NP\Model\DataObject\Realisation;
use NP\Model\Repository\UsesRepository;

$pathName = $project->codename;

if (!file_exists(__DIR__ . "/$pathName.php"))
    $pathName .= '_' . Translation::getCurrentLanguage();
$pathName .= '.php';

echo "<h2>$project->title</h2>";

$comps = (new UsesRepository())->getSkillsByRealisation($project->codename);

echo "<h3>" . Translation::translate("Compétences mises en œuvre", "Skills concerned") . " :</h3>
      <ul>";

foreach ($comps as $skill)
    echo "<li>$skill</li>";

echo "</ul>
      <p>
        <br>";
require $pathName;
echo "</p>";