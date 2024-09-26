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
            Schema::create('volunteering', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('type_help_id')->unsigned();
                $table->bigInteger('shelter_id')->unsigned();
                $table->string('type_of_car')->nullable();
                $table->integer('distance')->nullable();
                $table->integer('duration_of_walk')->nullable();
                $table->timestamps();

                $table->foreign('type_help_id')->references('id')->on('type_help');
                $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');

            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteering');
    }
};
