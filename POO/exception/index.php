<?php

require_once 'Testeur.php';
require_once 'User.php';

try {
    $a = false;
    if (!$a) {
        throw new Exception("Je voulais que $a soit vrai");
    }
    echo "ici";
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $testeur = new Testeur();

    echo $testeur->diviser(3, 2);
    echo "<br>";
    echo $testeur->diviser(5, 0);

} catch (Exception $e) {
    file_put_contents(
        "app.log",
        "[" . date("Y-m-d H:i:s") . "]"
        . $e->getFile()
        . "line" . $e->getLine()
        . " " . $e->getmessage()
        . PHP_EOL . $e->getTraceAsString() . PHP_EOL,
        FILE_APPEND
    );
    echo "Une erreur est survenue";
}

echo "<br>";
$testeur->diviserCentPar(0);

echo "<br>";

try {
    $moi = new User();
    $moi->setPseudo(["fjhihfiudhihfuguiahfiughugiuniuzghifgdhnziubgdiuhgniubquvbibgvizubgffvyifibrnizuui"]);
    $moi->setPseudo("blabla");
    $moi->setAge(33.5);
    $moi->getStatus("super_admin");
}
catch (InvalidArgumentException $e) {
    echo "Une méthode a reçu une valeur non valide : " . $e->getMessage();
}catch(UnexpectedValueException $e){
    echo "Une méthode a reçue une valeur inattendue : " . $e->getMessage();
}catch (throwable $e){
    echo $e>getMessage();
}catch (Exception $e) {
    echo $e>getMessage();
}finally{
    echo "<p>Du code qui ba s'exécuter qu'une exception ait été jetée ou pas</p>";
}
