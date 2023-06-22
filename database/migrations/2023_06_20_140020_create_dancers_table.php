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
        Schema::create('dancers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('body')->nullable();
            $table->json('legs')->nullable();
            $table->json('head')->nullable();
            $table->json('arms')->nullable();
            $table->boolean('dancing')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dancers');
    }
};
