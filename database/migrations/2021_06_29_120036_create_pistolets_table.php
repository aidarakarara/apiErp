<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePistoletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pistolets', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('carburant');
            $table->double('prix',8,3);
            $table->unsignedBigInteger('pompe_id')->nullable();
            $table->unsignedBigInteger('reservoir_id')->nullable();
            $table->unsignedBigInteger('compteur_id')->nullable();
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
        Schema::dropIfExists('pistolets');
    }
}
