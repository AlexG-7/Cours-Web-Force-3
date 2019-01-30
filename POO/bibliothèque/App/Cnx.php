<?php

namespace App;

/**
 * Création de la classe Cnx
 */
class Cnx
{
    /**
     * constante HOST
     *
     * @var string
     */
    const HOST = "localhost";

    /**
     * constante USER
     *
     * @var string
     */
    const USER = "root";

    /**
     * constante PASSWORD
     *
     * @var string
     */
    const PASSWORD = "";

    /**
     * constante DB_NAME
     *
     * @var string
     */
    const DB_NAME = "bibliotheque";

    /**
     * Attribut statique $instance
     *
     * @var PDO
     */
    private static $instance;

    /**
     * Méthode statique de $instance
     *
     * @return [type] [description]
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new \PDO(
                "mysql:dbname=" . self::DB_NAME .
                ";host=" . self::HOST,
                self::USER,
                self::PASSWORD,
                [
                \PDO::MYSQL_ATTR_INIT_COMMAND=> "SET names utf8",
                \PDO::ATTR_DEFAULT_FETCH_MODE=> \PDO::FETCH_ASSOC,
                \PDO::ATTR_ERRMODE=> \PDO::ERRMODE_EXCEPTION
                ]
            );
        }
        return self::$instance;
    }
}
