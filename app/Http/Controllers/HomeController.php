<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Models\Dancers;
use App\Classes\PartSkills;
use App\Models\MusicGenres;
use Illuminate\Http\Request;
use App\Services\SongsService;
use App\Services\DancersService;
use Illuminate\Support\Facades\DB;
use App\Services\MusicGenresService;

class HomeController extends Controller
{
    private $dancersService, $musicGenresService, $songsService;
   

    public function __construct(DancersService $dancersService, MusicGenresService $musicGenresService, SongsService $songsService)
    {
        $this->dancersService = $dancersService;
        $this->musicGenresService = $musicGenresService;
        $this->songsService = $songsService;
    }

    public function index(){
        $songs = $this->songsService->get();
        $dancers = $this->dancersService->get();
        $genres = $this->musicGenresService->get();

        $bodySkills = new PartSkills('body_skills', 'body', 'Движения туловищем');
        $headSkills = new PartSkills('head_skills', 'head', 'Движения головой');
        $legsSkills = new PartSkills('legs_skills', 'legs', 'Движения ногами');
        $armsSkills = new PartSkills('arms_skills', 'arms', 'Движения руками');

        return view('home',[
            'songs' => $songs, 
            'dancers' => $dancers,
            'genres' => $genres,
            'headSkills' => $headSkills,
            'bodySkills' => $bodySkills,
            'legsSkills' => $legsSkills,
            'armsSkills' => $armsSkills,
        ]);
    }

    public function changeSong(Request $request){
        if ($request->ajax()) 
        {
            $currentSong = $this->songsService->find($request->song);
            
            $dancers = $this->dancersService->get();       

            foreach ($dancers as $dancer) {
                
                if($currentSong->checkGenresRequirements($dancer)){
                    $dancer->setStatus(true);
                }
                else{
                    $dancer->setStatus(false);
                }
                
            }

            $songView = view('song_info',[
                'currentSong' => $currentSong,
            ])->render();

            $dancerView = view('dancers',[
                'dancers' => $dancers
            ])->render();

            return [$songView, $dancerView];
        }
    }
}
