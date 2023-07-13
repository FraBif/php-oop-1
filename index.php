<?php

class Films {
 
    $titolo;
    $genere;
    $regista;

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







?>