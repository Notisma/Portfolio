<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
<h2>CV</h2>
<p>I haven't written my CV in English yet, but the French version is here :</p>
<object data="<?= W::getSiteRoot() ?>/resources/other/CV_2023.pdf" type="application/pdf"
        width="100%" height="700px">
    <p>Unable to display PDF file. <a
                href="<?= W::getSiteRoot() ?>/resources/other/CV_2023.pdf">Download</a> instead.
    </p>
</object>
