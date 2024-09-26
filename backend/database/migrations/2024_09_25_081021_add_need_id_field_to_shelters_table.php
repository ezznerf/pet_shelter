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
        Schema::table('shelters', function (Blueprint $table) {
            $table->bigInteger('need_id')->unsigned()->nullable()->after('status');

            $table->foreign('need_id')->references('id')->on('needs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shelters', function (Blueprint $table) {
            $table->dropColumn('need_id');
        });
    }
};
