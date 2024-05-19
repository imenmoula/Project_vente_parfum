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
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 255);
            $table->string('description', 255);
            $table->string('image', 255)->nullable();
            $table->dateTime('date_creation');
            $table->dateTime('date_update');
            $table->string('status', 255);
            $table->string('sexe', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
