<?php
/** @var Realisation $project */

use NP\Lib\Translation;
use NP\Model\DataObject\Realisation;

$pathName = $project->codename . '_' . Translation::getCurrentLanguage() . '.php';

echo "<h2>$project->title</h2>";

$comps = (new \NP\Model\Repository\UsesRepository())->getSkillsByRealisation($project->codename);

echo "<h3>Compétences mises en œuvre :</h3>
      <ul>";

foreach ($comps as $skill)
    echo "<li>$skill</li>";

echo "</ul>";

require $pathName;
