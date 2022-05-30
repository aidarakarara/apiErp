<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->double('totallub',12,3)->nullable()->default(0);
            $table->double('totallav',12,3)->nullable()->default(0);
            $table->double('totalacc',12,3)->nullable()->default(0);
            $table->date('date_recette')->nullable();
            $table->double('totalfut',12,3)->nullable()->default(0);       
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
        Schema::dropIfExists('recettes');
    }
}
