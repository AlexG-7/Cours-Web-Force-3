<?php

require_once 'Chat.php';

echo "<h1> Exercice 4 : Un chat qui a la class… </h1> ";

//-------------------- INSTANCIATION DES CHATS ---------------------------------
try {
    $chat1 = new Chat("Pistached", 7, "vert", "femelle", "sphinx");
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

try {
    $chat2 = new Chat("chocolated", 3, "marron", "male", "mechantchat");
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

try {
    $chat3 = new Chat("mandarined", 4, "orange", "femelle", "gentilchat");
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}


//-------------- AFFICHAGE DES CHATS A LAIDE DE LA METHODE getInfos() ----------

for( $i = 1; $i <= 3; $i++ )
    {
        echo 'Chat N°' . $i . '<ul>';
    foreach(${'chat' . $i}->getInfos() as $informations => $valeur){
        echo '<li>' . $informations . ' : ' . $valeur . '</li>';
    }
        echo '</ul>';
        echo '<hr />';
}

?>
