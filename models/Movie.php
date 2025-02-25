<?php

class Movie
{
    public $title;
    public $year;
    public $cast = array();
    public $director;
    public $genre;

    public function __construct($title, $year, $cast, $director, Genre $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->cast = $cast;
        $this->director = $director;
        $this->genre = $genre;
    }

    public function getMovieInfo()
    {
        return "Title: $this->title <br> Year: $this->year <br> Cast: " . implode(", ", $this->cast) . "<br> Director: $this->director <br> Genre: " . $this->genre->getName() . "<br> Description: " . $this->genre->description . "<br>";
    }
}

$movie1 = new Movie("The Shawshank Redemption", 1994, array("Tim Robbins", "Morgan Freeman"), "Frank Darabont", $horror);
$movie2 = new Movie("The Godfather", 1972, array("Marlon Brando", "Al Pacino"), "Francis Ford Coppola", $comedy);
$movie3 = new Movie("The Dark Knight", 2008, array("Christian Bale", "Heath Ledger"), "Christopher Nolan", new Genre("Action", "Action films usually include high energy, big-budget physical stunts and chases, possibly with rescues, battles, fights, escapes, destructive crises (floods, explosions, natural disasters, fires, etc.), non-stop motion, spectacular rhythm and pacing, and adventurous, often two-dimensional 'good-guy' heroes (or recently, anti-heroes) who must face against 'bad guys'."));
