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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shelter_id')->unsigned();
            $table->string('breed')->nullable();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
