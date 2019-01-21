
<ul>
    <a href="message.php?pays=fr"><li>France</li></a>
    <a href="message.php?pays=it" ><li>Italie</li></a>
    <a href="message.php?pays=es" ><li>Espagne</li></a>
    <a href="message.php?pays=en" ><li>Angleterre</li></a>
</ul><hr>

<?php



if ($_GET) {

    switch ($_GET["pays"]) {
        case 'fr':
            echo "Vous êtes français ?";
            break;

        case 'it':
            echo "Vous êtes italien ?";
            break;

        case 'es':
            echo "Vous êtes espagnol ?";
            break;

        case 'en':
            echo "Vous êtes anglais ?";
            break;

        default:
            echo "";
            break;
    }
}



?>
