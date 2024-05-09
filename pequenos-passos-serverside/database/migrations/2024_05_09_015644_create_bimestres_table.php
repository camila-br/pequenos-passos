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
        Schema::create('bimestres', function (Blueprint $table) {
            $table->id();
            $table->integer('ano_letivo');
            $table->date('primeiro_bimestre_inicio');
            $table->date('primeiro_bimestre_fim');
            $table->date('segundo_bimestre_inicio');
            $table->date('segundo_bimestre_fim');
            $table->date('terceiro_bimestre_inicio');
            $table->date('terceiro_bimestre_fim');
            $table->date('quarto_bimestre_inicio');
            $table->date('quarto_bimestre_fim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bimestres');
    }
};
