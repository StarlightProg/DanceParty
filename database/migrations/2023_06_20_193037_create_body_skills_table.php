<?php

use App\Models\Skills\BodySkills;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('body_skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill')->unique();
            $table->timestamps();
        });

        DB::table('body_skills')->insert([
            [ 'skill' => 'wiggle' ],
            [ 'skill' => 'smooth' ],
            [ 'skill' => 'hip' ],
            [ 'skill' => 'twist' ],
            [ 'skill' => 'rhytm' ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_skills');
    }
};
