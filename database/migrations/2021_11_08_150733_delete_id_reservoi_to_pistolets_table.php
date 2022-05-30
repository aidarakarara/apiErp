<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteIdReservoiToPistoletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pistolets', function (Blueprint $table) {
         $table->dropColumn('reservoir_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pistolets', function (Blueprint $table) {
            $table->unsignedBigInteger('reservoir_id')->nullable();
        });
    }
}
