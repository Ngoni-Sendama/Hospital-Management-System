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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth'); // Changed to date type
            $table->enum('gender', ['Male', 'Female', 'Other']); // Enum for gender
            $table->date('admission_date'); // Changed to date type
            $table->date('discharge_date')->nullable(); // Changed to date type and nullable
            $table->foreignId('bed_id')->constrained()->onDelete('set null'); // Ensure that bed_id is a foreign key
            $table->enum('status', ['Admitted', 'Discharged', 'Pending']); // Enum for status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
