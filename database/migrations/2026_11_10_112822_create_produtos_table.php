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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->string('marca');
            $table->foreignId('categoria_id')->constrained();;
            $table->string('unidade_medida');
            $table->decimal('preco_custo', 15, 2);
            $table->decimal('preco_venda', 15, 2);
            $table->foreignId('fornecedor_id')->constrained();;
            $table->integer('quantidade');
            $table->integer('estoque_min');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
