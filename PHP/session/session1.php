<?php

// PHP/session/session1.php

session_start(); // S'il existe un fichier de session pour cet utilisateur (navigateur), cette fonction va l'ouvrir. Sinon il va le créer et va créer un cookie pour lier le fichier de session et le navigateur (cf c://xampp/tmp/)

$_SESSION['pseudo'] = 'Yakine'; 
$_SESSION['email'] = 'yakine.hamida@evogue.fr';

echo '<pre>'; 
print_r($_SESSION);
echo '</pre>'; 

unset($_SESSION['email']); // supprimer un élément d'un array

echo '<pre>'; 
print_r($_SESSION);
echo '</pre>';


session_destroy(); // supprime le fichier de session. S'éxécute à la fin du script. Donc pas terrible pour gérer la deconnexion. Pour bien gérer la déconnexion on va plutôt unset toutes les infos de l'utilisateur. 

echo '<pre>'; 
print_r($_SESSION);
echo '</pre>';




