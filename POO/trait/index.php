<?php
require_once 'autoload.php';

$foo = new Foo();
$bar = new Bar();
$str = 'blabla';

// la méthode dump() du Trait Dumper
// est utilisable dans chaque classe qui l'intégre avec "use"
$foo->dump($str);
$bar->dump($str);

$foo->setBaz('test');
$foo->dumpBaz();
// méthode du Trait Displayer
$foo->display('message', 'red');
$foo->displayBaz('green');

