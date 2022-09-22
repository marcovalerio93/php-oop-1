<?php

class Movie {

    public $title;
    public $type;
    public $year;

    public function __construct($argTitle,$argType,$argYear = null)
    {
        $this->title = $argTitle;
        $this->type = $argType;
        $this->year = $argYear;
        
    }

}


$iMovie = new Movie ("2001: a space odissey","Science fiction","1968");

$iMovie = new Movie ("The Hitchhiker's guide to the galaxy","Science fiction","2005");

$iMovie = new Movie ("The Hangover","Commedy","2009");

var_dump($iMovie);