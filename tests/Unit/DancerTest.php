<?php

namespace Tests\Unit;

use App\Classes\Dancer;
use PHPUnit\Framework\TestCase;

class DancerTest extends TestCase
{
    private $dancer;

    public function setUp(): void{
        parent::setUp();

        $this->dancer = new Dancer("Nikita",["shake"],["bend"],["stay"],["move"]); 
    }

    public function test_dancer_field(): void
    {
        $this->assertEquals('Nikita', $this->dancer->getName());
    }

    public function test_dancer_skills(): void
    {
        $this->assertEquals([
            "body" => ["shake"], 
            "legs" => ["bend"], 
            "head" => ["stay"], 
            "arms" => ["move"]
        ], $this->dancer->getSkills());
    }
}
