<?php

namespace App\Classes;

class Dancer{
    protected string $name;
    protected array $body, $legs, $head, $arms;
    protected bool $dancing;

    public function __construct(string $name, array $body, array $legs, array $head, array $arms)
    {
        $this->name = $name;

        $this->body = $body;
        $this->legs = $legs;
        $this->head = $head;
        $this->arms = $arms;

        $this->dancing = false;
    }

    public function getSkills(){
        return [
            "body" => $this->body, 
            "legs" => $this->legs, 
            "head" => $this->head, 
            "arms" => $this->arms
        ];
    }

    public function getName(){
        return $this->name;
    }

    public function getStatus(){
        return $this->dancing;
    }

    public function setStatus(bool $status){
        $this->dancing = $status;
    }
}