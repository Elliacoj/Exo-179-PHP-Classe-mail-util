<?php

require './classes/Email.php';

$mail1 = new Email("atlantis.91@hotmail.com", "amaury.jocaille@hotmail.com", "Bonjour, je suis le message","Test");

$mail1->send();