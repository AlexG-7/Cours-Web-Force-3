<?php
require_once 'Volume.php';
/** Class Cube*/
class Cube implements Volume
{

    /**
     * @return string
     *
     */
    public function getForme(): string
    {
        return 'cube';
    }
}