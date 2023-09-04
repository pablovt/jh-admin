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
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('telefone')->unsigned()->nullable()->change();
            $table->string('celular')->unsigned()->nullable()->change();
            $table->string('email')->unsigned()->nullable()->change();
            $table->string('cpf')->unsigned()->nullable()->change();
            $table->string('rg')->unsigned()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            //
        });
    }
};
