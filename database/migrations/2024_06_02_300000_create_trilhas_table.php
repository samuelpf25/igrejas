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
        Schema::create('trilhas', function (Blueprint $table) {
            $table->foreignId('pessoa_id')->constrained(
                table: 'pessoas',
                indexName: 'trilhas_pessoa_id'
            );
            $table->timestamps();

            $arr = array('decisao', 'encontro', 'celula', 'culto', 'batismo', 'membresia', 'licao5', 'cmc1', 'tadel', 'discipulado', 'cmc2', 'tic');
            foreach ($arr as $key => $value) {
                $table->boolean($value);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trilhas');
    }
};
