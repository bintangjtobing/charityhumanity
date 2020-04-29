<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Konfirmasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmationdb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('nama');
            $table->bigInteger('notelp');
            $table->string('email');
            $table->bigInteger('jumlah_donasi');
            $table->string('senderbank');
            $table->string('sendername');
            $table->string('tobank');
            $table->string('receivedbank');
            $table->string('refnumber');
            $table->string('bukti');
            $table->longText('notes');
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
        Schema::dropIfExists('confirmationdb');
    }
}
