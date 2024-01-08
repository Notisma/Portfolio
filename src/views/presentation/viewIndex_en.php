<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
<h2>Welcome to my presentation website !</h2>
<p>
    I am Raphaël Izoret, a student in Computer Science and IT.
    <br>
    You are currently on my main website. It contains <a href="?controller=CV&action=displayIndex">professionnal
        information</a> about myself, as well as some of my
    <a href="?controller=Realisations&action=displayIndex">recent productions</a>, in a professionnal context but also
    some personnel projects.
    <br>
    I hope you will have a good time browsing my site !
    <br>
    PS : If you're interested, just like all of my projects, this application is Open-Source ! (<a
            href="<?= W::getSourceCode() ?>">source link</a> in the
    footer)
</p>
