<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->integer('kategori_id_kategori')->unsigned();
            $table->string('nama_barang', 50);
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->integer('harga_grosir');
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::table('barang', function (Blueprint $table) {
            $table->foreign('kategori_id_kategori', 'kategori_id_kategori_fk_kategori')->references('id_kategori')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
