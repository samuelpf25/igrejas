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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('endereco');
            $table->string('telefone');
            $table->date('dataNascimento');
            $table->string('foto');
            $table->string('estadoCivil');
            $table->integer('sexo');
            $table->string('email');
            $table->boolean('ativo');
            $table->string('login');
            $table->string('senha');
            $table->foreignId('igreja_id')->constrained(
                table: 'igrejas',
                indexName: 'pessoas_igreja_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
