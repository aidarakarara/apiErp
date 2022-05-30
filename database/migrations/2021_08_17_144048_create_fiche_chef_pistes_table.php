<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheChefPistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_chef_pistes', function (Blueprint $table) {
            $table->id();
            $table->date('date_ficheChefPiste');
           $table->double('cash',12,3)->nullable()->default(0);
            $table->double('cheque',12,3)->nullable()->default(0);
            $table->unsignedBigInteger('caisse_id')->nullable();
            $table->unsignedBigInteger('pompe_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
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
        Schema::dropIfExists('fiche_chef_pistes');
    }
}
