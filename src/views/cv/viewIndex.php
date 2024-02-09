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

<div id="competencesEtSavoirfaire">
    <div>
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
    </div>
    <div id="savoirfaire">
        <h2>Savoir-faire</h2>

        <h3>Réaliser un développement d’application</h3>
        <ul>
            <li>Élaborer et implémenter des conceptions à partir d'exigences</li>
            <li>Réaliser et évaluer des tests en regard des spécifications</li>
            <li>Développer des interfaces utilisateurs</li>
            <li>Adopter de bonnes pratiques de conception et de programmation</li>
            <li>Faire évoluer une application existante</li>
        </ul>

        <h3>Optimiser des applications</h3>
        <ul>
            <li>Analyser un problème avec méthode</li>
            <li>Sécuriser les données et le code</li>
            <li>Anticiper les résultats de diverses métriques (temps d’exécution, occupation mémoire...)</li>
            <li>Profiler, analyser et justifier le comportement d’un code existant</li>
        </ul>

        <h3>Collaborer au sein d’une équipe informatique</h3>
        <ul>
            <li>Appréhender l’écosystème numérique</li>
            <li>Identifier les statuts, les fonctions et les rôles de chaque membre d’une équipe pluridisciplinaire</li>
            <li>Acquérir et mobiliser les compétences interpersonnelles pour intégrer et travailler avec une équipe</li>
            <li>Rendre compte de mon activité</li>
            <li>Accompagner le management de projet informatique</li>
        </ul>
    </div>
</div>

