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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('genre')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('structure')->nullable();
            $table->string('specialite')->nullable();
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('image_profil')->nullable();
            $table->foreignId('user_id')->nullable()->index();
            $table->foreignId('profession_id')->nullable()->indnomex();
            $table->boolean("is_active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};
