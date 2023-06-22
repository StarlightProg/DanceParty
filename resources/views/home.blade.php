@extends('layouts.app')

@section('content')

<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Ночной клуб</a>
        </div>
    </nav>

    <div>
        <h5 class="d-inline-block mr-4">Сейчас играет</h5>
        <select id='playlist' class="form-select d-inline-block w-auto" aria-label="">
            <option selected>Выберите трек</option>
            @foreach ($songs as $song)
              <option value="{{$song->getTitle()}}">{{$song->getTitle()}}</option>
            @endforeach
        </select>
    </div>

    @include('song_info')  

    <button class="btn btn-primary" type="button" id="add-song-btn">Добавить трек</button>
    <button class="btn btn-secondary" type="button" id="add-dancer-btn">Добавить танцора</button>

    <div class="border border-2 rounded" id="add-song-form" style="display:none; padding: 10px;">
      @include('add_song')  
    </div>

    <div class="border border-2 rounded" id="add-dancer-form" style="display:none; padding: 10px;">
      <form method="POST" action="{{ route('dancer.add') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="dancer-name">Название</label>
          <input type="text" name="dancer_name" class="form-control" id="dancer-name" placeholder="Введите имя танцора">
        </div>  

        @include('add_dancer_skill', ['skills' => $bodySkills])
        @include('add_dancer_skill', ['skills' => $legsSkills])
        @include('add_dancer_skill', ['skills' => $headSkills])
        @include('add_dancer_skill', ['skills' => $armsSkills])

        <button type="submit" class="btn btn-primary">Добавить</button>
      </form>
    </div>

    @include('dancers')  

@endsection

@push('script')
  <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endpush

