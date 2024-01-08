<?php

use NP\Configuration\WebsiteConfiguration as W;

?>
Here is a small electronic model I was able to make using Arduino UNO :
<br><img src="<?= W::getImages() ?>realisations/arduino/model_front.jpg" alt=""></br>
It was created in a context of self-taught Arduino discovery, to improve my electronics skills. It lets you play a
music track with just a frequency buzzer, but only if it spots an object less than a meter in front of it
(ultrasonic sensor). You can disable this feature by pressing a button on the model, and adjust the pitch of the
music (lower / higher) by moving an attached joystick.
<br><img src="<?= W::getImages() ?>realisations/arduino/model_top.jpg" alt=""></br>
All the software is written in C++ with an Arduino library for electronic communication (reads and writes of
electrical signals). I also use the language's object system for musical notes.
<br><img src="<?= W::getImages() ?>realisations/arduino/code.png" alt=""></br>
