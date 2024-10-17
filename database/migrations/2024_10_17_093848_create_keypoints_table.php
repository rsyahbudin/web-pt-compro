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
        Schema::create('keypoints', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('keypoint'); // Field for storing keypoint description
            $table->string('manufacture'); // Field for storing keypoint description
            $table->foreignId('our_principle_id') // Foreign key to our_principles table
                  ->constrained('our_principles') // Reference the our_principles table
                  ->onDelete('cascade'); // Specify action on delete
            $table->softDeletes(); // Enable soft deletes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keypoints');
    }
};
