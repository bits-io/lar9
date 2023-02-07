<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->integerIncrements('id_pemesanan');
            $table->string('kode_pemesanan')->unique();
            $table->string('tanggal_pemesanan');
            $table->integer('id_penumpang');
            $table->string('kode_kursi');
            $table->integer('id_rute');
            $table->string('tujuan');
            $table->date('tanggal_berangkat');
            $table->time('jam_cekin');
            $table->time('jam_berangkat');
            $table->integer('total_bayar');
            $table->integer('id_petugas');
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
        Schema::dropIfExists('bookings');
    }
};
