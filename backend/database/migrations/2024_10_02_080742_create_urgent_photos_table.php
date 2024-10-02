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
        Schema::create('urgent_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('urgent_help_id');
            $table->string('path')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('size')->nullable();
            $table->timestamps();
            $table->foreign('urgent_help_id')->references('id')->on('urgent_help')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urgent_photos');
    }
};
