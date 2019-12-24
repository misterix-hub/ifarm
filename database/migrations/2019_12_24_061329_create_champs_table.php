<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ferme_id');
            $table->string('nom');
            $table->double('lat')->nullable();
            $table->double('long')->nullable();
            $table->text('addresse_map')->nullable();
            $table->unsignedInteger('superficie')->nullable();
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
        Schema::dropIfExists('champs');
    }
}
