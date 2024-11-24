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
       
    
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('user_id'); // Foreign key for users table
            $table->unsignedBigInteger('doctor_id'); // Foreign key for doctors (Medecin) table
            $table->string('name'); // Name of the person making the appointment
            $table->string('phone'); // Phone number of the person
            $table->string('email'); // Email of the person
            $table->text('message'); // Additional message (reason for appointment, etc.)
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key relationships
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Foreign key to users table
            $table->foreign('doctor_id')->references('id')->on('medecins')->onDelete('cascade'); // Foreign key to doctors (Medecin) table
        });
    }

    public function down()
    {
        // Drop the appointments table if we rollback
        Schema::dropIfExists('appointments');
    }
};
