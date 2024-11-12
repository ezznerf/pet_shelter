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
        Schema::table('volunteering', function (Blueprint $table) {
            $table->string('img_path')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();

            $table->dropColumn('type_help_id');
            $table->dropColumn('shelter_id');
            $table->dropColumn('type_of_car');
            $table->dropColumn('distance');
            $table->dropColumn('duration_of_walk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('volunteering', function (Blueprint $table) {
            $table->string('type_of_car')->nullable();
            $table->string('distance')->nullable();
            $table->string('duration_of_walk')->nullable();
            $table->dropColumn('img_path');
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->bigInteger('type_help_id')->unsigned();
            $table->bigInteger('shelter_id')->unsigned();
            $table->foreign('type_help_id')->references('id')->on('type_helps');
            $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');

        });
    }
};
