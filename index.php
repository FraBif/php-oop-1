<?php

class Films {
 
   public $titolo;
   public $genere;
   public $regista;

    function __construct($titolo, $genere, $regista) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->regista = $regista;
    }

    function getInfos() {
        return $this->titolo;
        return $this->genere;
        return $this->regista; 
    }
}

$film1 = new Films("Pulp Fiction", "Thriller", "Quentin Tarantino")
$film2 = new Films("Arancia Meccanica", "Drammatico", "Stanley Kubrick")
$film3 = new Films("This is England", "Drammatico", "Shane Meadows")


echo $film1->getInfos()
var_dump($film1)

echo $film2->getInfos()
var_dump($film2)

echo $film3->getInfos()
var_dump($film3)





?>