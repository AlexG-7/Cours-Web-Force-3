<?php
// PHP/session/session2.php

session_start(); // Ouvre le fichier de session (ou le créé s'il n'existe pas)


echo '<pre>'; 
print_r($_SESSION);
echo '</pre>'; 

// Ce fichier session2.php n'a rien à voir avec session1.php (pas de include...) et pourtant on a accès à toutes les informations créées dans le fichier de session. 

// Cela est possible grâce à session_start(), et à la superglobale $_SESSION. 

// Ce fichier pourrait être n'importe où sur le serveur que ca fonctionnerait de la même manière :) 




