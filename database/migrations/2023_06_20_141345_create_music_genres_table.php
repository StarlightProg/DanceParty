<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('music_genres', function (Blueprint $table) {
            $table->id();
            $table->string('genre')->unique();
            $table->string('body')->nullable();
            $table->string('legs')->nullable();
            $table->string('head')->nullable();
            $table->string('arms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music_genres');
    }
};
