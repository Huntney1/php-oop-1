<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Movie{
    public $title;
    public $director;
    public $generes;

    public function __construct($title, $director, $generes,) {
        $this->title = $title;
        $this->director = $director;
        $this->generes = $generes;
    }

    public function displayInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Director: " . $this->director . "<br>";
        echo "Generes: " . implode(", ",$this->generes) . "<br>";
    }

}

?>