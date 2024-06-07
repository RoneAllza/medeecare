<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpsiJawabanDepresiTable extends Migration
{
    public function up()
    {
        Schema::create('opsi_jawaban_depresi', function (Blueprint $table) {
            $table->id('id_jawaban_depresi');
            $table->unsignedBigInteger('id_pertanyaan_depresi');
            $table->foreign('id_pertanyaan_depresi')->references('id_pertanyaan_depresi')->on('pertanyaan_depresi')->onDelete('cascade');
            $table->integer('jawaban_depresi');
            $table->integer('skor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opsi_jawaban_depresi');
    }
}
