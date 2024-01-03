<?php
/**
 * @var Skill[][] $skills
 */

use NP\Configuration\WebsiteConfiguration as W;
use NP\Model\DataObject\Skill;

?>
<h2>CV</h2>
<p>I haven't written my CV in English yet, but the French version is here :</p>
<object data="<?= W::getSiteRoot() ?>/resources/other/CV_2023.pdf" type="application/pdf"
        width="100%" height="550px">
    <p>Unable to display PDF file. <a
                href="<?= W::getSiteRoot() ?>/resources/other/CV_2023.pdf">Download</a> instead.
    </p>
</object>

<h2>Skills</h2>

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
