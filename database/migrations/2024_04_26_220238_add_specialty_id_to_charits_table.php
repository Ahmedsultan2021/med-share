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
        Schema::table('charits', function (Blueprint $table) {
            $table->bigInteger('specialty_id')->unsigned()->nullable()->after('admin_id');
            $table->foreign('specialty_id')->references('id')->on('Specialties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('charits', function (Blueprint $table) {
            //
        });
    }
};
