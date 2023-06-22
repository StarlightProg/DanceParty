<form method="POST" action="{{ route('track.add') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="song-title">Название</label>
    <input type="text" name="song_name" class="form-control" id="song-title" placeholder="Введите название трека">
    </div>

    <div class="tag_container_head" id="tag_container_head">
    <h5>Жанры</h5>
    @foreach ($genres as $genre) 
        <div class="form-check mt-2 tag_row d-flex align-items-center">
            <div class="col-sm-11">
            <input class="form-check-input" type="checkbox" value="{{$genre->getGenre()}}" name="song_genres[]" id="flexCheck_{{$genre->getGenre()}}">
            <label class="form-check-label" for="flexCheck_{{$genre->getGenre()}}">
                {{$genre->getGenre()}}
            </label>
            </div>
        </div>
    @endforeach
    </div>
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
