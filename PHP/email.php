<?php

$email = 'Yakine.hamida@evogue.fr';

$position_at = strpos($email, '@');
$fin_email = substr($email, $position_at + 1);
$position_point = strpos($fin_email, '.');

$extension = substr($email, $position_at + 1, $position_point);
echo '<br/><br/><br/><br/>';
echo 'Voici l\'extension de l\'email : ' . $extension . '<br/>';

//-----------

$email = 'toto@yopmail.com';

$position_at = strpos($email, '@');
$fin_email = substr($email, $position_at + 1);
$position_point = strpos($fin_email, '.');

$extension = substr($email, $position_at + 1, $position_point);

echo 'Voici l\'extension de l\'email : ' . $extension  . '<br/>';
