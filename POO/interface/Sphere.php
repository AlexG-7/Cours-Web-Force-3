<?php

require_once 'Volume.php';

/**
 * Création classe Sphere
 */
class Sphere implements Volume
{
    public function getForme(): string
    {
      return "sphère";
    }
}
