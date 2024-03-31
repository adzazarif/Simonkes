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
        //
        Schema::table('pasiens', function (Blueprint $table) {
            $table->unsignedBigInteger('pegawais_id')->nullable();
            $table->foreign('pegawais_id')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('pasiens', function (Blueprint $table) {
            $table->dropForeign('pegawais_id');
            $table->dropColumn('pegawais_id');
        });
    }
};
