<?php

use App\Models\Skills\HeadSkills;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('head_skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill')->unique();
            $table->timestamps();
        });

        DB::table('head_skills')->insert([
            [ 'skill' => 'wiggle' ],
            [ 'skill' => 'smooth' ],
            [ 'skill' => 'spin' ],
            [ 'skill' => 'roll' ],
            [ 'skill' => 'rhytm' ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('head_skills');
    }
};
