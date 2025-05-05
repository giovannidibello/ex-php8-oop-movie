<?php

class Movie
{

    public $title;
    public $director;
    public $releaseYear;
    public $genres = [];

    function __construct($_title, $_director, $_releaseYear, array $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->genres = $_genres;
    }

    // metodo per convertire l'array di generi in una stringa
    public function getArrayAsString()
    {
        $genreNames = [];
        foreach ($this->genres as $genre) {
            $genreNames[] = $genre->name;
        }

        return implode(', ', $genreNames);
    }

    // metodo che restituisce una stringa dall'oggetto
    public function toString()
    {
        return "Titolo: {$this->title}, Direttore: {$this->director}, Anno: {$this->releaseYear}, Genere: {$this->getArrayAsString()} <br>";
    }
}
