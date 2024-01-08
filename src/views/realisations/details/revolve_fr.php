<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
Rev0lve est un jeu vidéo pour PC que j'ai réalisé en solo dans mon temps libre. Il se trouve actuellement dans un
état privé, car j'ai décidé de garder le concept pour le retravailler plus tard plutôt que de publier le jeu et son
code dès maintenant.
<br><img src="<?= W::getImages() ?>realisations/revolve/title_screen.png" alt=""><br>
Sans trop en dire sur le jeu en lui-même, il a été réalisé avec Unity, en 2D. Tous les sprites sont dessinés en
pixel art par moi-même, et les scripts sont écrits à la main. Voici un des niveaux :
<br><img src="<?= W::getImages() ?>realisations/revolve/level3.png" alt=""><br>
Les scripts sont écrits en C#, un language que je n'apprécie pas beaucoup, mais je m'y suis adapté. De par la nature
de Unity le développement était particulièrement orienté objet, mais sans beaucoup d'héritage puisque les scripts
pour GameObjects doivent hériter de MonoBehaviour par défaut.
<br><img src="<?= W::getImages() ?>realisations/revolve/code.png" alt=""><br>
