<?php


/**
 * Class Foo
 */
class Foo
{
    // use (dans la classe) permet d'intégrer un ou plusieurs Trait
    use Dumper, Displayer;

    /**
     * @var string
     */
    private $baz;

    /**
     * @return string
     */
    public function getBaz(): string
    {
        return $this->baz;
    }

    /**
     * @param string $baz
     * @return Foo
     */
    public function setBaz(string $baz): Foo
    {
        $this->baz = $baz;

        return $this;
    }

    public function dumpBaz()
    {
        // on utilise $this comme si la méthode
        // faisait partie de la classe
        $this->dump($this->baz);
    }

    public function displayBaz(string $color = null)
    {
        $this->display($this->baz, $color);
    }
}
