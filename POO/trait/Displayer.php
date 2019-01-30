<?php


trait Displayer
{
    public function display(string $var, string $color = 'black')
    {
        echo '<p style="color:' . $color . '">' . $var . '</p>';
    }
}
