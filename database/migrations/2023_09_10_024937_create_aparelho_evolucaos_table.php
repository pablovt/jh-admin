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
        Schema::create('aparelho_evolucao', function (Blueprint $table) {
            $table->unsignedBigInteger('aparelho_id');
            $table->foreign('aparelho_id')
                ->references('id')
                ->on('aparelhos')
                ->onDelete('cascade');
            $table->unsignedBigInteger('evolucao_id');
            $table->foreign('evolucao_id')
                ->references('id')
                ->on('evolucaos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aparelho_evolucaos');
    }
};
