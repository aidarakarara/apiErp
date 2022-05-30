<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLavagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lavages', function (Blueprint $table) {
            $table->id();
            $table->string('num_vehicule');
            $table->string('type');
            $table->double('carosserie',12,3)->nullable()->default(0);
            $table->double('moteur',12,3)->nullable()->default(0);
            $table->double('graissage',12,3)->nullable()->default(0);
            $table->double('pulv',12,3)->nullable()->default(0);
            $table->double('complet',12,3)->nullable()->default(0);
            $table->date('date_lavage')->nullable();
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
        Schema::dropIfExists('lavages');
    }
}
