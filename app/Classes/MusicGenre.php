<?php

namespace App\Classes;

class MusicGenre{
    protected string $genre;
    protected ?string $bodyReq, $legsReq, $headReq, $armsReq;

    public function __construct(string $genre, ?string $bodyReq = null, ?string $legsReq = null, ?string $headReq = null, ?string $armsReq = null)
    {
        $this->genre = $genre;

        $this->bodyReq = $bodyReq;
        $this->legsReq = $legsReq;
        $this->headReq = $headReq;
        $this->armsReq = $armsReq;
    }

    public function getRequirements(){
        return [
            "body" => $this->bodyReq, 
            "legs" => $this->legsReq, 
            "head" => $this->headReq, 
            "arms" => $this->armsReq
        ];
    }

    public function checkRequirements(Dancer $dancer){
        $skills = $dancer->getSkills();

        $matches = array();

        foreach ($this->getRequirements() as $part => $skill) {
            $matches[$part] = 'no';
            
            if(is_null($skill)){
                $matches[$part] = 'yes';
                continue;
            }

            if (in_array($skill, $skills[$part])) {
                $matches[$part] = 'yes';
            }
        }

        if (array_search('no', $matches) === false) {
            return true;
        } else {
            return false;
        }

    }

    public function getGenre(){
        return $this->genre;
    }
}