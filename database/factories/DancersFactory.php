<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Dancers>
 */
class DancersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bodySkills = DB::table('body_skills')->select('skill')->get()->pluck('skill')->toArray();
        $legsSkills = DB::table('legs_skills')->select('skill')->get()->pluck('skill')->toArray();
        $armsSkills = DB::table('arms_skills')->select('skill')->get()->pluck('skill')->toArray();
        $headSkills = DB::table('head_skills')->select('skill')->get()->pluck('skill')->toArray();

        $skills = [$bodySkills, $legsSkills, $armsSkills, $headSkills];
        $allRandomSkills = [];

        foreach($skills as $skillType){
            $arrayLength = rand(1, 3);

            $randomSkills = [];
            for ($i = 0; $i < $arrayLength; $i++) {
                $availableSkills  = array_diff($skillType, $randomSkills);
                if (empty($availableSkills )) {
                    break;
                }
                $randomSkills[] = $availableSkills[array_rand($availableSkills)];
            }

            $allRandomSkills[] = $randomSkills;
        }

        return [
            'name' => fake()->name(),
            'body' => json_encode($allRandomSkills[0]),
            'legs' => json_encode($allRandomSkills[1]),
            'arms' => json_encode($allRandomSkills[2]), 
            'head' => json_encode($allRandomSkills[3]),  
        ];
    }
}
