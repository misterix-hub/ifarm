<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemenceInsecticidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semence_insecticides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semence_id');
            $table->integer('insecticide_id');
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
        Schema::dropIfExists('semence_insecticides');
    }
}
