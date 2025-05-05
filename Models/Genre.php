<?php

class Genre
{

    public $name;
    public $popularity;

    function __construct($_name, $_popularity)
    {
        $this->name = $_name;
        $this->popularity = $_popularity;
    }
}
