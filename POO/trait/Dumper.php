<?php


trait Dumper
{
    public function dump($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}
