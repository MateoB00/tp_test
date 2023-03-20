<?php

namespace App;

use ErrorException;

class Hippopotamus {

    private $name;
    private $weight;
    private $tusksSize;

    function __construct($name, $weight, $tusksSize) {	
        $this->name = $name;
        $this->weight = $weight;
        $this->tusksSize = $tusksSize;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        if (!empty($name)) {
        $this->name = $name;   
        } else {
            throw new ErrorException();
        }
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }
    
    public function setWeight(int $weight): self
    {
        if (!empty($weight)) {
            $this->weight = $weight;
        } else {
            throw new ErrorException();
        }

        return $this;
    }

    public function getTusksSize(): ?int
    {
        return $this->tusksSize;
    }
    
    public function setTusksSize(int $tusksSize): self
    {
        if (!empty($tusksSize)) {
            $this->tusksSize = $tusksSize;
        } else {
            throw new ErrorException();
        }

        return $this;
    }

    public function swim()
    {
        $this->weight -= 300;
    }

    public function eat()
    {
        $this->weight += 1000;
    }
    public function fight(Hippopotamus $hippopotame)
    {
        if ($this->tusksSize > $hippopotame->tusksSize) {
            return $this->name . ' as gagné';
        } else {
            return $hippopotame->getName() . " t'as battut";
        }
    }
    
    public function __toString(): string
    {
        return sprintf('Name %s, Poids %s, Tailles des défenses %s', $this->name, $this->weight, $this->tusksSize);
    }
}

$hippo = new Hippopotamus("Hippo", 1000, 25);

for ($i = 1; $i <= 3; $i++) {
    echo "Jour " . $i . " :\n";
    for ($j = 1; $j <= 15; $j++) {
        $hippo->eat();
        $hippo->eat();
        $hippo->swim();
        $hippo->swim();
        $hippo->swim();
    }
    echo $hippo . "\n";
}
