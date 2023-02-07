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
        Schema::create('passengers', function (Blueprint $table) {
            $table->integerIncrements('id_penumpang');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama_penumpang');
            $table->string('alamat_penumpang');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('telepon');
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
        Schema::dropIfExists('passengers');
    }
};
