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
        Schema::create('parfum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade');
            $table->string('nom', 255);
            $table->string('description', 255);
            $table->decimal('prix', 10, 2);
            $table->integer('qte_stock');
            $table->string('image', 255)->nullable();
            $table->decimal('volume', 10, 2);
            $table->string('genre', 255);
            $table->string('marque', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parfum');
    }
};
