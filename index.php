<?php

class Movie {
 
   public $title;
   public $genre;
   public $director;

    function __construct($title, $genre, $director) {
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
    }

    function getInfos() {
        return "Title: " . $this->title . " , Genre: " . $this->genre . " , Director: " . $this->director . "" ;
    }
}

$movie1 = new Movie("Pulp Fiction", "Thriller", "Quentin Tarantino");
$movie2 = new Movie("Arancia Meccanica", "Drammatico", "Stanley Kubrick");
$movie3 = new Movie("This is England", "Drammatico", "Shane Meadows");


echo $movie1->getInfos();
var_dump($movie1);

echo $movie2->getInfos();
var_dump($movie2);

echo $movie3->getInfos();
var_dump($movie3);





?>