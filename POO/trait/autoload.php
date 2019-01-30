<?php
/*
 * Cette fonction est appelée automatiquement
 * quand on utilise une classe contenue dans un fichier
 * qui n'a pas été inclus
 */
spl_autoload_register(function ($classname) {
    // le chemin du fichier qui contient la classe
    $file = __DIR__ . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $classname)
        . '.php'
    ;

    require_once $file;
});
