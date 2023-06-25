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
        Schema::create('carousel_element_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carousel_element_id')->constrained(table: 'carousel_elements')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 2);

            $table->string('title', 32);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousel_element_translations');
    }
};
