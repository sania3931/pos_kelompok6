<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id_pembelian');
            $table->integer('suplier_id_suplier')->unsigned();
            $table->integer('user_id_user')->unsigned();
            $table->string('no_faktur', 50);
            $table->date('tgl_pembelian');
            $table->integer('total');
            $table->dateTime('tgl_input');
            $table->timestamps();
        });

        Schema::table('pembelian', function (Blueprint $table) {
            $table->foreign('suplier_id_suplier', 'suplier_id_suplier_fk_pembelian')->references('id_suplier')->on('suplier')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id_user', 'user_id_user_fk_pembelian')->references('id_user')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
