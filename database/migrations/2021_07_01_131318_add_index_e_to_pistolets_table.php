<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexEToPistoletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pistolets', function (Blueprint $table) {
            $table->double('indexE',12,3)->nullable()->default(0);
            $table->double('indexM',12,3)->nullable()->default(0);
            $table->dropColumn('compteur_id');
            
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
            $table->dropColumn(['indexE', 'indexM']);
        });
    }
}
