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
        /*
         * Exemplo equivalente em SQL:
         *
         * CREATE TABLE cursos (
         *   id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         *   nome VARCHAR(255) NOT NULL,
         *   descricao TEXT NOT NULL,
         *   created_at TIMESTAMP NULL,
         *   updated_at TIMESTAMP NULL
         * );
         */
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
