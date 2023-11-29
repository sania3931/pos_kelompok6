<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_pembelian', function (Blueprint $table) {
            $table->increments('id_tr_pembelian');
            $table->integer('barang_id_barang')->unsigned();
            $table->integer('penjualan_id_penjualan')->unsigned();
            $table->integer('jumlah');
            $table->integer('harga');
            $table->integer('sub_total');
            $table->timestamps();
        });
        // Schema::table('tr_penjualan', function (Blueprint $table) {
        //     $table->foreign('barang_id_barang', 'barang_id_barang_fk_barang')->references('id_barang')->on('barang')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('penjualan_id_penjualan', 'penjualan_id_penjualan_fk_pembelian')->references('id_penjualan')->on('penjualan')->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_pembelian');
    }
}
