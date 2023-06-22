<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function genres()
    {
        return $this->belongsToMany(MusicGenres::class, 'genre_song', 'song_id', 'genre_id');
    }
}
