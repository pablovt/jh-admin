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
        Schema::create('evolucaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')
                ->references('id')
                ->on('alunos')
                ->onDelete('cascade');
            $table->unsignedBigInteger('servico_id');
            $table->foreign('servico_id')
                ->references('id')
                ->on('servicos')
                ->onDelete('cascade');
            $table->unsignedBigInteger('aparelho_id');
            $table->foreign('aparelho_id')
                ->references('id')
                ->on('aparelhos')
                ->onDelete('cascade');
            $table->unsignedBigInteger('profissional_id');
            $table->foreign('profissional_id')
                ->references('id')
                ->on('profissionals')
                ->onDelete('cascade');
            $table->date('data');
            $table->text('observacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evolucaos');
    }
};
