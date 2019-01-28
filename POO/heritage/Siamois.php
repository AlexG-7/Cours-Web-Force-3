<?php
require_once 'Chat.php';

/**
 * Class Siamois
 *
 * Une classe déclarée finale ne peut pas etre héritée
 *
 */
final class Siamois extends Chat
{

    /*
     * Fatal error : la méthode ronronner() est déclarée final
     * dans Chat,donc on ne peut pas la surcharger
    public function ronronner
    {
        echo 'Ronronron';
    }
    */

}