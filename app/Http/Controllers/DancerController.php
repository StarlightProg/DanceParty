<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DancersService;

class DancerController extends Controller
{
    private $dancersService;

    public function __construct(DancersService $dancersService)
    {
        $this->dancersService = $dancersService;
    }

    public function get(){
        return $this->dancersService->get();
    }

    public function store(Request $request){
        $this->dancersService->store($request);

        return redirect()->route('home.index');
    }
}
