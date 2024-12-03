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
        Schema::create('professionals', function (Blueprint $table) {
            $table->id(); // ID único para cada profissional
            $table->string('name'); // Nome do profissional
            $table->string('category'); // Categoria do profissional
            $table->string('city'); // Cidade onde o profissional atua
            $table->string('contact'); // Contato do profissional
            $table->text('description')->nullable(); // Descrição do profissional
            $table->json('photos')->nullable();
            $table->timestamps(); // Timestamps padrão (created_at e updated_at)
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
