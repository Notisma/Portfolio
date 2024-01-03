<?php
/**
 * @var Skill[][] $skills
 */

use NP\Configuration\WebsiteConfiguration as W;
use NP\Model\DataObject\Skill;

?>
<h2>CV</h2>
<object data="<?= W::getSiteRoot() ?>/resources/other/CV_2023.pdf" type="application/pdf"
        width="100%" height="550px">
    <p>Échec de l'affichage du PDF. <a
                href="<?= W::getSiteRoot() ?>/resources/other/CV_2023.pdf">Télécharger</a> à la place.
    </p>
</object>

<h2>Compétences</h2>

<?php
foreach ($skills as $cat => $groupOfSkills) {
    echo "
        <h3>$cat :</h3>
        <ul>";

    foreach ($groupOfSkills as $skill)
        echo "
        <li>
            $skill->name ($skill->masteryLevelOutOfTen/10)
        </li>
        ";

    echo "
        </ul>
    ";
}
?>
