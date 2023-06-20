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
        Schema::create('contacts_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number', 32);
            $table->string('email', 32);
            $table->string('building_number', 32);
            $table->string('street_name', 32);
            $table->string('postcode', 32);
            $table->string('city', 32);
            $table->string('country', 32);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts_descriptions');
    }
};
