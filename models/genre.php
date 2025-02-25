<?php


class Genre
{
    protected $name;
    public $description;
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}

$horror = new Genre("Horror", "Horror films are designed to frighten and to invoke our hidden worst fears, often in a terrifying, shocking finale, while captivating and entertaining us at the same time in a cathartic experience.");
$comedy = new Genre("Comedy", "Comedy is a genre of film that uses humor as a driving force. The aim of a comedy film is to illicit laughter from the audience through entertaining stories and characters.");
$crime = new Genre("Crime", "Crime films revolve around the sinister actions of criminals
or mobsters, particularly bank robbers, underworld figures, or ruthless hoodlums who operate outside the law, stealing and murdering their way through life.");
