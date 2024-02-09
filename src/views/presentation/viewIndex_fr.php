<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
<h2>Bienvenue sur mon site de présentation !</h2>
<p>
    || Ce site est un WIP, il manque donc du contenu sur certaines pages ||
    <br>
    <br>
    Je suis Raphaël Izoret, un étudiant dans les domaines de l'informatique, et vous vous trouvez actuellement sur mon
    site principal.
    <br>
    Il contient des informations <a href="?controller=Projection&action=displayIndex">personnelles</a> et <a
            href="?controller=CV&action=displayIndex">professionnelles</a> sur moi ainsi que
    certaines de mes <a href="?controller=Realisations&action=displayIndex">réalisations récentes</a>.
    <br>
    J'espère que vous passerez un bon moment sur mon site !
</p>

<?php require 'contact.php' ?>

<p>
    PS : Si cela vous intéresse, comme tous mes projets, ce site est Open-Source ! (<a
            href="<?= W::getSourceCode() ?>">lien de la source</a> dans le footer)
</p>
