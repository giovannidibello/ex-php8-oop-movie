<?php

class Movie
{

    public $title;
    public $director;
    public $releaseYear;
    public $genre;

    function __construct($_title, $_director, $_releaseYear, Genre $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->genre = $_genre;
    }

    public function toString()
    {
        return "Titolo: {$this->title}, Direttore: {$this->director}, Anno: {$this->releaseYear}, Genere: {$this->genre->name} <br>";
    }
}
