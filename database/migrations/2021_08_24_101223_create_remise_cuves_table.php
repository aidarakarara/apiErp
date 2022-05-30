<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemiseCuvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remise_cuves', function (Blueprint $table) {
            $table->id();
            $table->double('capacite');
            $table->unsignedBigInteger('reservoir_id')->nullable();
            $table->unsignedBigInteger('synthese_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remise_cuves');
    }
}
