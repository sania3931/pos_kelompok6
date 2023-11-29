<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id_penjualan');
            $table->integer('user_id_user')->unsigned();
            $table->date('tgl_penjualan');
            $table->integer('total');
            $table->dateTime('tgl_input');
            $table->timestamps();
        });

        Schema::table('penjualan', function (Blueprint $table) {
            $table->foreign('user_id_user', 'user_id_user_fk_penjualan')->references('id_user')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
