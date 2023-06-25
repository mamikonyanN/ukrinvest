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
        Schema::create('press_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('press_id')->constrained(table: 'press')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 2);

            $table->string('title', 32);
            $table->string('description', 128);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('press_translations');
    }
};
