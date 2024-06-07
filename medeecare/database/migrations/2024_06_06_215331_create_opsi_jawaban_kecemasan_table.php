<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpsiJawabanKecemasanTable extends Migration
{
    public function up()
    {
        Schema::create('opsi_jawaban_kecemasan', function (Blueprint $table) {
            $table->id('id_jawaban_kecemasan');
            $table->unsignedBigInteger('id_pertanyaan_kecemasan');
            $table->foreign('id_pertanyaan_kecemasan')->references('id_pertanyaan_kecemasan')->on('pertanyaan_kecemasan')->onDelete('cascade');
            $table->integer('jawaban_kecemasan');
            $table->integer('skor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opsi_jawaban_kecemasan');
    }
}
