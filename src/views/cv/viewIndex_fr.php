<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
<h2>CV</h2>
<object data="<?= W::getSiteRoot() ?>/ressources/other/CV_2023.pdf" type="application/pdf"
        width="100%" height="700px">
    <p>Échec de l'affichage du PDF. <a
                href="<?= W::getSiteRoot() ?>/ressources/other/CV_2023.pdf">Télécharger</a> à la place.
    </p>
</object>
