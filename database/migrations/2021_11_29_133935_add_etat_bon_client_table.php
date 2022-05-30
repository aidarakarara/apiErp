<?php

use App\Models\Encaissement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEtatBonClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bon_clients', function (Blueprint $table) {
            $table->boolean('etat')->default(false);
            $table->foreignIdFor(Encaissement::class)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bon_clients', function (Blueprint $table) {
            $table->dropColumn('etat');
            $table->dropColumn('encaissement_id');
        });
    }
}
