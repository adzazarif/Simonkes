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
        Schema::table('pegawais', function(Blueprint $table){
            $table->unsignedBigInteger('departemens_id')->nullable();
            $table->foreign('departemens_id')->references('id')->on('departemens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('pegawais', function(Blueprint $table){
            $table->dropForeign('departements_id');
            $table->dropColumn('departements_id');
        });
    }
};
