<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compteurs', function (Blueprint $table) {
            $table->id();
            $table->double('indexOuvE',12,2)->nullable()->default(0);//index ouverture electronique
            $table->double('indexOuvM',12,2)->nullable()->default(0); // index ouverture mecanique
            $table->double('indexFerE',12,2)->nullable()->default(0);// index fermeture Electronique
            $table->double('indexFerM',12,2)->nullable()->default(0);
            $table->double('prix',8,3);// prix du temps T du pistolet
            $table->unsignedBigInteger('pistolet_id')->nullable();
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
        Schema::dropIfExists('compteurs');
    }
}
