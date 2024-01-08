<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
Voici un petit modèle électronique que j'ai réalisé avec Arduino UNO :
<br><img src="<?= W::getImages() ?>realisations/arduino/model_front.jpg" alt=""><br>
Il a été créé dans un contexte de découverte de l'Arduino, en auto-didacte, pour affiner mes compétences en
électronique. Il permet de jouer une piste de musique avec uniquement un buzzer de fréquence, mais uniquement si il
repère un objet à moins d'un mètre devant lui (capteur à ultrasons). On peut désactiver cette fonctionnalité en
appuyant sur un bouton sur le modèle, et ajuster la hauteur de la musique (plus grave / plus aigu) en déplacant un
joystick attaché.
<br><img src="<?= W::getImages() ?>realisations/arduino/model_top.jpg" alt=""><br>
L'intégralité du software est fait en C++ avec une librairie Arduino pour la communication électronique (read et
write de signaux électriques). J'utilise également le système d'objets du language pour les notes de musique.
<br><img src="<?= W::getImages() ?>realisations/arduino/code.png" alt=""><br>
