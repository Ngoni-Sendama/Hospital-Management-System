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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['Diagnostic', 'Surgical', 'Monitoring', 'Life Support', 'Sterilization', 'Lab', 'Cleaning and Sanitation', 'Personal']); // Enum for category
            $table->enum('availability_status', ['Available', 'In Use', 'Maintenance']); // Enum for status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
