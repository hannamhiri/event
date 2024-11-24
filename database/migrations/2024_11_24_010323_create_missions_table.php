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
        Schema::create('missions', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->string('nom'); // Colonne pour le nom de la mission
            $table->text('description')->nullable(); // Colonne pour la description
            $table->string('image')->nullable(); // Colonne pour l'image (chemin de stockage)
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
