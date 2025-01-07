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
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            //lLivre des Origines Congolaise 
            $table->string("loc")->nullable();
            $table->string("name");
            $table->string("nickname")->nullable();
            $table->string("caracteristique")->nullable();
            $table->string("date_naissance")->nullable();
            $table->foreignId('owner_dog_id')->nullable()->index();
            $table->foreignId('parent_id')->nullable()->index();
            $table->foreignId('dog_type_id')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
};
