<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('plat_no');
            $table->integer('kapasitas');
            $table->integer('harga');
            $table->string('warna');
            $table->date('tahun_keluar');
            $table->string('perseling');
            $table->unsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->On('merks')->OnDelete('CASCADE');
            $table->unsignedInteger('jenis_id');
            $table->foreign('jenis_id')->references('id')->On('jenis')->OnDelete('CASCADE');
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
        Schema::dropIfExists('mobils');
    }
}
