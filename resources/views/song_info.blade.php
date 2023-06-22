<div id="song_info">
    @if (isset($currentSong) && $currentSong != 'default_song')
        <div>
            <h5 class="d-inline-block mr-4">Жанры песни: </h5>
            @foreach ($currentSong->getGenres() as $genre)
                <p class="d-inline-block mr-4">{{$genre->getGenre()}}</p>
            @endforeach
            
        </div>

        <div>
            <h5 class="d-inline-block mr-4">Требования к танцору: </h5>
            @foreach ($currentSong->getGenres() as $genre)
                <div>
                    @foreach($genre->getRequirements() as $part => $skill)
                        <p class="d-inline-block mr-4">{{$part}}: {{is_null($skill) ? "что-угодно" : $skill}};</p>
                    @endforeach
                </div>
            @endforeach
        </div>             
    @endif
</div>