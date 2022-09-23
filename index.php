<?php

class Movie {

    public $title;
    public $type;
     public $director;
    public $year;

    public function __construct($argTitle,$argType,$argDirector = null)
    {
        $this->title = $argTitle;
        $this->type = $argType;
        $this->director= $argDirector;
    }

    public function setYear($year) {

        if (is_int($year) && $year >= 1895&& $year < 2030) {
            $this->year =$year;
        } else {
            die('Errore anno!');
        }
    }
    public function getYear(){
        return $this->year;
    }


}


$firstMovie = new Movie ("2001: a space odissey","Science fiction");
$firstMovie->setYear(1968);

$secondMovie = new Movie ("The Hitchhiker's guide to the galaxy","Science fiction");
$secondMovie->setYear(2005);

$thirdMovie = new Movie ("The Hangover","Commedy");
$thirdMovie->setYear(2009);
var_dump($iMovie);