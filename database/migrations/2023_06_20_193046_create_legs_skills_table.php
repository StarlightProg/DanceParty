<?php

use App\Models\Skills\LegsSkills;
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
        Schema::create('legs_skills', function (Blueprint $table) {
            $table->id();
            $table->string('skill')->unique();
            $table->timestamps();
        });

        DB::table('legs_skills')->insert([
            [ 'skill' => 'slide' ],
            [ 'skill' => 'smooth' ],
            [ 'skill' => 'squat' ],
            [ 'skill' => 'rhytm' ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('legs_skills');
    }
};
