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
        Schema::table('apotekers', function(Blueprint $table){
            $table->unsignedBigInteger('personal_infos_id')->nullable();
            $table->foreign('personal_infos_id')->references('id')->on('personal_infos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('apotekers', function(Blueprint $table){
            $table->dropForeign('personal_infos_id');
            $table->dropColumn('personal_infos_id');
        });
    }
};
