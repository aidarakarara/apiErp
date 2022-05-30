<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_cars', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cde')->nullable();
            $table->string('numero_bl')->nullable();
            $table->integer('heure')->nullable();
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
        Schema::dropIfExists('commande_cars');
    }
}
