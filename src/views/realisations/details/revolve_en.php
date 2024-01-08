<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
Rev0lve is a computer game for Linux that I've been making solo in my spare time. It's currently in a private state,
as I've decided to keep the concept to work on later rather than publish the game and its code right now.
<br><img src="<?= W::getImages() ?>realisations/revolve/title_screen.png" alt=""><br>
Without saying too much about the game itself, it was made in Unity, in 2D. All sprites are drawn in pixel art by
myself, and the scripts are hand-written. Here's one of the levels:
<br><img src="<?= W::getImages() ?>realisations/revolve/level3.png" alt=""><br>
The scripts are written in C#, a language I don't enjoy that much, but I've adapted to it. Due to the nature
of Unity, development was particularly object-oriented, but without much inheritance since scripts
for GameObjects must inherit from MonoBehaviour by default.
<br><img src="<?= W::getImages() ?>realisations/revolve/code.png" alt=""><br>
