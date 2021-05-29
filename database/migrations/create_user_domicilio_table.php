<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomicilioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string("domicilio");
            $table->integer("numero_exterior");
            $table->boolean("colonia");
            $table->date("cp");
            $table->string("ciudad");
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
        Schema::dropIfExists('table');
    }
}
