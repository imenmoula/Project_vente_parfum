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
        Schema::create('promotion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parfum_id')->constrained('parfum')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade');
            $table->string('nom_promotio', 255);
            $table->string('description', 255);
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('pourcentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion');
    }
};
