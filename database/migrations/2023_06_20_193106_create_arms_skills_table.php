<?php

use App\Models\Skills\ArmsSkills;
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
        Schema::create('arms_skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill')->unique();
            $table->timestamps();
        });

        DB::table('arms_skills')->insert([
            [ 'skill' => 'circle' ],
            [ 'skill' => 'smooth' ],
            [ 'skill' => 'bend' ],
            [ 'skill' => 'rhytm' ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arms_skills');
    }
};
