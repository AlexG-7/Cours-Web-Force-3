<?php

/**
 * Cette fonction est appelée automatiquement quand on utilise une classe
 * contenu dans un fichier qui n'a pas été inclus
 */
spl_autoload_register(
    function ($classname) {
        $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $classname) . ".php";
        include_once $file;
    }
);
