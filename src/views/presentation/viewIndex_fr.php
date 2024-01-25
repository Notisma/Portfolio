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
    Il recense des <a href="?controller=CV&action=displayIndex">informations professionnelles</a> sur moi ainsi que
    des <a href="?controller=Realisations&action=displayIndex">réalisations récentes</a>,
    dans un contexte d'étude autant que personnel.
    <br>
    J'espère que vous passerez un bon moment sur mon site !
    <br>
    PS : Si cela vous intéresse, comme tous mes projets, ce site est Open-Source ! (<a
            href="<?= W::getSourceCode() ?>">lien de la source</a> dans le footer)
</p>
