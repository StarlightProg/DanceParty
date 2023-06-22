<?php

namespace App\Services;

use App\Classes\MusicGenre;
use App\Models\MusicGenres;

class MusicGenresService{

    public function get(){
        $genresDB = MusicGenres::all();
        $genres = [];

        foreach ($genresDB as $genre) {
            $genres[] = new MusicGenre(
                $genre->genre,
                $genre->body,
                $genre->legs,
                $genre->head,
                $genre->arms
            );
        }

        return $genres;
    }

    public function getSongGenres($songGenres){
        $genres = [];

        foreach($songGenres as $genre){
            $genres[] = new MusicGenre(
                $genre->genre,
                $genre->body,
                $genre->legs,
                $genre->head,
                $genre->arms
            );
        }

        return $genres;
    }

}