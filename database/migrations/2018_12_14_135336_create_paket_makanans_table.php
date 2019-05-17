<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_makanans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_paket');
            $table->foreign('id_paket')->references('id')->on('pakets')->onDelete('CASCADE');
            $table->unsignedInteger('id_makanan');
            $table->foreign('id_makanan')->references('id')->on('makanans')->onDelete('CASCADE');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('paket_makanans');
    }
}
