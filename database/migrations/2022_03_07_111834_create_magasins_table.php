<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagasinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magasins', function (Blueprint $table) {
            $table->id();
            $table->date('date_inventaire')->nullable();
            $table->string('produit');
            $table->double('qteI',12,3)->nullable()->default(0);
            $table->double('puI',12,3)->nullable()->default(0);
            $table->double('qteE',12,3)->nullable()->default(0);
            $table->double('puE',12,3)->nullable()->default(0);
            $table->double('qteS',12,3)->nullable()->default(0);
            $table->double('puS',12,3)->nullable()->default(0);
            $table->double('qteF',12,3)->nullable()->default(0);
            $table->double('qteR',12,3)->nullable()->default(0);
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
        Schema::dropIfExists('magasins');
    }
}
