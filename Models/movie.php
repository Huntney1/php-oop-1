<?php
//servono per mostrare gli errori
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Movie{
    /* Variabili/Proprietà/Attributi D'istanza */
    public $title;
    public $director;
    public $images;
    public $generes=[];

    /* Costruttore */
    public function __construct($title, $director, $images, $generes) {
        $this->title = $title;
        $this->director = $director;
        $this->images = $images;
        $this->generes = $generes;
    }

   /*  public function displayInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Director: " . $this->director . "<br>";
        echo "Images: " . $this->images . "<br>";
        echo "Generes: " . implode(", ",$this->generes) . "<br>";
    } */

}

?>