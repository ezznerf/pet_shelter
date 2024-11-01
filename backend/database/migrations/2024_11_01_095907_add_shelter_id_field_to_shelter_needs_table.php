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
        Schema::table('shelter_needs', function (Blueprint $table) {
            $table->unsignedBigInteger('shelter_id')->nullable();

            $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shelter_needs', function (Blueprint $table) {
            $table->dropForeign(['shelter_id']);
            $table->dropColumn('shelter_id');
        });
    }
};
