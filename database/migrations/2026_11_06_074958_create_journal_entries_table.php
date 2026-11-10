<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('journal_entries', function (Blueprint $table) {
            $table->id();

            // Journal Information
            $table->string('title');
            $table->string('category')->nullable();
            $table->string('date')->nullable();
            $table->text('excerpt');

            // Journal Media
            $table->string('image')->nullable();
            $table->string('caption')->nullable();

            // Timestamps
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('journal_entries');
    }
};