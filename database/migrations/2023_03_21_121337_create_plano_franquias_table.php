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
        Schema::create('franquia_plano', function (Blueprint $table) {
            $table->id();
            $table->integer('qtd');
            $table->unsignedBigInteger('franquia_id');
            $table->foreign('franquia_id')->references('id')->on('franquias');
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
        Schema::dropIfExists('plano_franquias');
    }
};
