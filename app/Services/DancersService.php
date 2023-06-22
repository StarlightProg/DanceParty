<?php

namespace App\Services;

use App\Classes\Dancer;
use App\Models\Dancers;
use Illuminate\Http\Request;

class DancersService{

    public function get(){
        $dancersDB = Dancers::all();
        $dancers = [];

        foreach ($dancersDB as $dancer) {
            $dancers[] = new Dancer(
                $dancer->name,
                json_decode($dancer->body),
                json_decode($dancer->legs),
                json_decode($dancer->head),
                json_decode($dancer->arms)
            );
        }

        return $dancers;
    }

    public function store(Request $data){
        Dancers::firstOrCreate([
            'name' => $data->dancer_name,
            'body' => json_encode($data->body_skills),
            'head' => json_encode($data->head_skills),
            'legs' => json_encode($data->legs_skills),
            'arms' => json_encode($data->arms_skills),
        ]);
    }
}