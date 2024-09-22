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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number', 11)->nullable()->after('email');
            $table->string('user_pic_path')->nullable()->after('phone_number');
            $table->boolean('is_active')->nullable()->after('user_pic_path');
            $table->integer('role_id')->after('is_active');
            $table->integer('level')->after('role_id');
            $table->bigInteger('balance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone_number');
            $table->dropColumn('user_pic_path');
            $table->dropColumn('is_active');
            $table->dropColumn('role_id');
            $table->dropColumn('level');
            $table->dropColumn('balance');
        });
    }
};
