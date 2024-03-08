<?php
/**
 * @var Realisation[] $projects
 */

use NP\Controllers\ControllerRealisations;
use NP\Lib\Translation;
use NP\Model\DataObject\Realisation;

?>
<h2><?= ControllerRealisations::getPageTitle() ?></h2>
<ul>
    <?php
    foreach ($projects as $pj)
        echo "
        <li>$pj</li>
        ";
    ?>
</ul>
