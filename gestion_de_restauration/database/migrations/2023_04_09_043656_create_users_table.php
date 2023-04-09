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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_utilisateur')->autoIncrement();
            $table->string('nom_utilisateur');
            $table->string('prenom_utilisatur');
            $table->date('date_de_naissance');
            $table->enum('genre',['M','F']);
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['admin','employee','client'])->default('client');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
