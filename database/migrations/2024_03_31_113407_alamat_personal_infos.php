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
        Schema::table('personal_infos', function(Blueprint $table){
            $table->unsignedBigInteger('alamats_id')->nullable();
            $table->foreign('alamats_id')->references('id')->on('alamats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('personal_infos', function(Blueprint $table){
            $table->dropForeign('alamats_id');
            $table->dropColumn('alamats_id');
        });
    }
};
