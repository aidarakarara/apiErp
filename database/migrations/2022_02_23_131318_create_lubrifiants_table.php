<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLubrifiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lubrifiants', function (Blueprint $table) {
            $table->id();
            $table->date('date_lubrifiant')->nullable();
            $table->string('produit');
            $table->double('ouverture',12,3)->nullable()->default(0);
            $table->double('entrant',12,3)->nullable()->default(0);
            $table->double('prixunitaire',12,3)->nullable()->default(0);
            $table->double('fermeture',12,3)->nullable()->default(0);
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
        Schema::dropIfExists('lubrifiants');
    }
}
