<?php

namespace App\Classes;

use Illuminate\Support\Facades\DB;

class PartSkills{
    protected string $tableName, $partName, $description;

    public function __construct(string $tableName, string $partName, ?string $description = null)
    {
        $this->tableName = $tableName;
        $this->partName = $partName;
        $this->description = $description;
    }

    public function getSkills(){
        $skills = DB::table($this->tableName)->get();

        return $skills;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPartName(){
        return $this->partName;
    }
}