<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbRental extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rental', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tanggal_transaksi');
            $table->string('tanggal_pengembalian');
            $table->string('id_member');
            $table->string('id_film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_rental');
    }
}
