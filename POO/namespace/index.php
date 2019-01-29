<?php

require_once 'Foo/Baz.php';
require_once 'Bar/Baz.php';

// Instanciation de la classe Baz qui est dans le namespace Foo
$baz = new Foo\Baz();
echo "<br>";
// Instanciation de la classe Baz qui est dans le namespace Bar
$baz = new Bar\Baz();
