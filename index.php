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

    public function getMovieInfo()
    {
        return $this->title . " (" . $this->year . ") - Directed by " . $this->director . " - Genre: " . $this->genre;
    }
}

$movie1 = new Movie("The Shawshank Redemption", 1994, array("Tim Robbins", "Morgan Freeman"), "Frank Darabont", "Drama");
$movie2 = new Movie("The Godfather", 1972, array("Marlon Brando", "Al Pacino"), "Francis Ford Coppola", "Crime");


echo $movie1->getMovieInfo();
echo "<br>";
echo $movie2->getMovieInfo();
