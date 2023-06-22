<?php

namespace Tests\Unit;

use App\Classes\Song;
use App\Classes\Dancer;
use App\Classes\MusicGenre;
use PHPUnit\Framework\TestCase;

class SongTest extends TestCase
{
    private $dancer, $song;

    public function setUp(): void{
        parent::setUp();

        $this->dancer = new Dancer("Nikita",["shake"],["bend"],["stay"],["move"]);

        $hiphop = new MusicGenre("Hip-Hop",null,null,null,null);
        $classic = new MusicGenre("Classic","shake","bend","stay","move"); 
        
        $this->song = new Song("Chilll", [$hiphop, $classic]);
    }

    public function test_song(): void
    {
        $this->assertTrue($this->song->checkGenresRequirements($this->dancer));
    }
}
