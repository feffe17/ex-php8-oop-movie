<?php
class Movie
{
    public $title;
    public $year;
    public $cast = array();
    public $director;
    public $genre;

    public function __construct($title, $year, $cast, $director, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->cast = $cast;
        $this->director = $director;
        $this->genre = $genre;
    }
}
