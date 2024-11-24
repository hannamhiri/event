<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('journalings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // ID de l'utilisateur
            $table->text('text');  // Texte du journaling
            $table->json('emotion_data')->nullable(); 
            $table->timestamps();

            // Ajouter une contrainte de clé étrangère pour 'user_id'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('journalings');
    }
};
