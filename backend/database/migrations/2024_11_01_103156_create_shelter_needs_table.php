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
        Schema::create('shelter_needs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shelter_id');
            $table->string('need')->nullable();
            $table->string('unit')->nullable();
            $table->string('brand')->nullable();
            $table->integer('count')->nullable();
            $table->timestamps();

            $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shelter_needs');
    }
};
