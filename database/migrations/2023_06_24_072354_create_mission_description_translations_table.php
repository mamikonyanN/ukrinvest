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
        Schema::create('mission_description_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mission_description_id')->constrained(table: 'mission_descriptions')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 2);

            $table->string('text', 1024);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission_description_translations');
    }
};
