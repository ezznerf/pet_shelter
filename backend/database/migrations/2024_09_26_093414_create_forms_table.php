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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shelter_id')->unsigned();
            $table->bigInteger('volunteering_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('time')->nullable();
            $table->string('date')->nullable();
            $table->string('car')->nullable();
            $table->string('about_yourself')->nullable();
            $table->timestamps();

            $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');
            $table->foreign('volunteering_id')->references('id')->on('volunteering')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
