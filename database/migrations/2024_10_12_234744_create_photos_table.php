<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This migration creates a new table called 'photos' in the database.
     * The 'photos' table consists of two primary fields:
     * 1. 'id' - an auto-incrementing unique identifier for each photo.
     * 2. 'timestamps' - which automatically adds 'created_at' and 'updated_at' 
     *    columns to the table, tracking when each record is created and last updated.
     * 
     * This table can be used to store photo metadata such as titles, URLs, 
     * and other relevant information about the images in the application.
     */
    public function up(): void
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('url', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
