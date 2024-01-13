<?php
/**
 * @var Skill[][] $skills
 */

use NP\Configuration\WebsiteConfiguration as W;
use NP\Lib\Translation;
use NP\Model\DataObject\Skill;

?>
<h2>CV</h2>
<?php
if (Translation::getCurrentLanguage() == 'en') echo "<p>I haven't written my CV in English yet, but the French version is here :</p>";
?>
<object data="<?= W::getSiteRoot() ?>/resources/other/CV_2024.pdf" type="application/pdf"
        width="100%" height="550px">
    <p><?= Translation::translate("Échec lors de l'affichage du PDF.", "Unable to display PDF file.") ?><a
                href="<?= W::getSiteRoot() ?>/resources/other/CV_2024.pdf"><?= Translation::translate("Télécharger</a> à la place.", "Download</a> instead.") ?>
    </p>
</object>

<h2><?= Translation::translate("Compétences", "Skills") ?></h2>

<?php
foreach ($skills as $cat => $groupOfSkills) {
    echo "
        <h3>$cat :</h3>
        <ul>";

    foreach ($groupOfSkills as $skill)
        echo "
        <li>
            $skill
        </li>
        ";

    echo "
        </ul>
    ";
}
?>
