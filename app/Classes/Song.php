<?php

namespace App\Classes;

class Song{
    protected string $title;
    protected array $genres;

    public function __construct(string $title, array $genres)
    {
        $this->title = $title;

        $this->genres = $genres;
    }

    public function checkGenresRequirements(Dancer $dancer){
        foreach ($this->genres as $genre) {
            if($genre->checkRequirements($dancer)){
                return true;
            }
        }
        return false;
    }

    public function getGenres(){
        return $this->genres;
    }

    public function getTitle(){
        return $this->title;
    }
}