<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->string('sigla')->primary();
            $table->string('nome');
            $table->unsignedBigInteger('pais_codigo');
            $table->timestamps();

            $table->foreign('pais_codigo')->references('codigo')->on('paises')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
