<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemenceEngraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semence_engrais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semence_id');
            $table->integer('engrais_id');
            $table->float('besoin_par_metre');
            $table->text('contre_indication');
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
        Schema::dropIfExists('semence_engrais');
    }
}
