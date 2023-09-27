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
        Schema::create('teste_clinicos', function (Blueprint $table) {
            $table->id();
            $table->text('equilibrio');
            $table->text('thomas');
            $table->text('plank');
            $table->text('forca_muscular_abdominal');
            $table->text('retracao_muscular');
            $table->text('forca_muscular_mmii');
            $table->text('4_apoios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teste_clinicos');
    }
};
