<?php
/**
 * @var Realisation[] $projects
 */

use NP\Lib\Translation;
use NP\Model\DataObject\Realisation;

?>
<h2><?= Translation::getTitleElem_Realisations() ?></h2>
<ul>
    <?php
    foreach ($projects as $pj)
        echo "
        <li>$pj</li>
        ";
    ?>
</ul>
