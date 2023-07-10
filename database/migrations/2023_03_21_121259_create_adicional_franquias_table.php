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
        Schema::create('adicional_franquias', function (Blueprint $table) {
            $table->id();
            $table->float('valor');
            $table->integer('qtd');
            $table->unsignedBigInteger('franquia_id');
            $table->foreign('franquia_id')->references('id')->on('franquias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adicional_franquias');
    }
};
