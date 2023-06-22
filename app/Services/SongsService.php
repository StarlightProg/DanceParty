<?php

namespace App\Services;

use App\Classes\MusicGenre;
use App\Classes\Song;
use App\Models\MusicGenres;
use App\Models\Songs;
use Illuminate\Http\Request;

class SongsService{

    private MusicGenresService $musicGenresService;

    public function __construct(MusicGenresService $mgs)
    {
        $this->musicGenresService = $mgs;
    }

    public function get(){
        $songsDB = Songs::all();
        $songs = [];

        foreach ($songsDB as $song) {
            $songs[] = new Song(
                $song->title,
                $this->musicGenresService->getSongGenres($song->genres)
            );
        }

        return $songs;
    }

    public function find(string $songName){
        $songDB = Songs::where('title', $songName)->first();

        return new Song(
            $songDB->title,
            $this->musicGenresService->getSongGenres($songDB->genres)
        );
    }

    public function store(Request $data){
        $newSong = Songs::firstOrCreate([
            'title' => $data->song_name
        ]);

        $newSongGenresId = [];

        foreach($data->song_genres as $genre){
            $newSongGenresId[] = MusicGenres::where('genre',$genre)->first()->id;
        }

        $newSong->genres()->attach($newSongGenresId);
    }

}