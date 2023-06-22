<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Songs;
use App\Models\Dancers;
use App\Models\MusicGenres;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Dancers::create([
            'name' => 'Andrey HipHoper',
            'body' => json_encode(['wiggle']),
            'legs' => json_encode(['squat']),
            'arms' => json_encode(['bend']),
            'head' => json_encode(['wiggle'])
        ]);

        Dancers::create([
            'name' => 'Nikita Electrodancer',
            'body' => json_encode(['wiggle']),
            'legs' => json_encode(['rhytm']),
            'arms' => json_encode(['circle']),
            'head' => json_encode(['wiggle'])
        ]);

        Dancers::create([
            'name' => 'Artem Pop',
            'body' => json_encode(['smooth']),
            'legs' => json_encode(['smooth']),
            'arms' => json_encode(['smooth']),
            'head' => json_encode(['smooth'])
        ]);

        Dancers::factory(5)->create();

        MusicGenres::create([
            'genre' => 'HipHop',
            'body' => 'wiggle',
            'legs' => 'squat',
            'arms' => 'bend',
            'head' => 'wiggle'
        ]);

        MusicGenres::create([
            'genre' => 'Electrodance',
            'body' => 'wiggle',
            'legs' => 'rhytm',
            'arms' => 'circle',
            'head' => null
        ]);

        MusicGenres::create([
            'genre' => 'Pop',
            'body' => 'smooth',
            'legs' => 'smooth',
            'arms' => 'smooth',
            'head' => 'smooth'
        ]);

        MusicGenres::create([
            'genre' => 'Chill',
            'body' => null,
            'legs' => null,
            'arms' => null,
            'head' => null
        ]);
        
        Songs::create([
            'title' => 'POWER'
        ])->genres()->attach([1]);

        Songs::firstOrCreate([
            'title' => 'Omen'
        ])->genres()->attach([2]);

        Songs::firstOrCreate([
            'title' => 'Ultraviolence'
        ])->genres()->attach([3]);

        Songs::firstOrCreate([
            'title' => 'Everyone is dancing'
        ])->genres()->attach([4]);
    }
}
