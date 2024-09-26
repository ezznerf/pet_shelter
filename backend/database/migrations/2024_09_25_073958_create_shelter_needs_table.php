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
            $table->unsignedBigInteger('need_id');
            $table->integer('count')->nullable();
            $table->string('brand')->nullable();
            $table->timestamps();

            $table->foreign('need_id')->references('id')->on('needs');
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
