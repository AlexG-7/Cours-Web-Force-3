

<?php

$tab = array("tableau" =>
    array(
    0 => "julien",
    1 => "nicolas",
    2 => "mathieu",
    3 => "christelle",
    4 => "nina",
    5 => "johanna"
));

echo "<pre>";
print_r($tab);
echo "</pre>";

echo $tab["tableau"][2];

$liste = file("prenom.txt");
$f = fopen("prenom.txt", "a");
$info = $tab["tableau"][2];
fwrite($f, $info . "\r\n");
fclose($f);

?>