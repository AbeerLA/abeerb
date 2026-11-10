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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            // Project Information
            $table->string('title');
            $table->string('caption')->nullable();
            $table->text('description');

            // Technologies used (e.g. Laravel, PHP, MySQL)
            $table->json('tags')->nullable();

            // Project Media
            $table->string('image')->nullable();

            // Project Links
            $table->string('code')->nullable();
            $table->string('demo')->nullable();

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};