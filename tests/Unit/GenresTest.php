<?php

namespace Tests\Unit;

use App\Classes\Dancer;
use App\Classes\MusicGenre;
use PHPUnit\Framework\TestCase;

class GenresTest extends TestCase
{
    private $dancer;
    private $musicGenre;

    public function setUp(): void{
        parent::setUp();

        $this->dancer = new Dancer("Nikita",["shake"],["bend","beend"],["stay","sit"],["move"]);
        $this->musicGenre = new MusicGenre("Hip-Hop","shake","bend","stay","move");
    }

    public function test_genre(): void
    {
        $this->assertTrue($this->musicGenre->checkRequirements($this->dancer));
    }
}
