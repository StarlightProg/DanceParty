<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicGenres extends Model
{
    use HasFactory;

    protected $fillable = ['genre', 'body', 'legs', 'head', 'arms'];

    public function songs()
    {
        return $this->belongsToMany(Songs::class, 'genre_song', 'genre_id', 'song_id');
    }
}
