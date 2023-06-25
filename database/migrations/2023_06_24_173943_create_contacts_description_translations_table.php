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
        Schema::create('contacts_description_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contacts_description_id')->constrained(table: 'contacts_descriptions', indexName: 'contacts_description_translation_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 2);

            $table->string('phone', 32);
            $table->string('email', 32);
            $table->string('building_number', 32);
            $table->string('street', 32);
            $table->string('postal_code', 32);
            $table->string('city', 32);
            $table->string('country', 32);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts_description_translations');
    }
};
