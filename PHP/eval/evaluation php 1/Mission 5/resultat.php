<?php

if ($_POST) {
    switch ($_POST["operation"]) {
        case 'add':
            echo $_POST["nombre1"] + $_POST["nombre2"];
            break;

        case 'sub':
            echo $_POST["nombre1"] - $_POST["nombre2"];
            break;

        case 'mul':
            echo $_POST["nombre1"] * $_POST["nombre2"];
            break;

        case 'div':
            if ($_POST["nombre2"] == 0) {
                echo "impossible de diviser par 0";
            } else {
                echo $_POST["nombre1"] / $_POST["nombre2"];
            }
            break;


        default:
            echo "veuillez ressaisir l'opération";
            break;
    }
}


?>