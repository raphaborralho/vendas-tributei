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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->integer('recorrencia');
            $table->float('qtd_acrescimo')->nullable();
            $table->float('qtd_desconto')->nullable();
            $table->boolean('implantacao');
            $table->unsignedBigInteger('entidade_id');
            $table->foreign('entidade_id')->references('id')->on('entidades');
            $table->unsignedBigInteger('plano_id');
            $table->foreign('plano_id')->references('id')->on('planos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
