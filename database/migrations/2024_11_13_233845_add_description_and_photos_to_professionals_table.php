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
        Schema::table('professionals', function (Blueprint $table) {
            // Adicionando a coluna 'description' (descrição do profissional)
            $table->text('description')->nullable();

            // Adicionando a coluna 'photos' (fotos do profissional) em formato JSON
            $table->json('photos')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('professionals', function (Blueprint $table) {
            // Removendo as colunas 'description' e 'photos' caso a migração seja revertida
            $table->dropColumn('description');
            $table->dropColumn('photos');
        });
    }
};
