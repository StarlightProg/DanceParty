<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SongsService;

class SongController extends Controller
{
    private $songsService;
   

    public function __construct(SongsService $songsService)
    {
        $this->songsService = $songsService;
    }

    public function get(){
        return $this->songsService->get();
    }

    public function store(Request $request){
        $this->songsService->store($request);    

        return redirect()->route('home.index');
    }
}
