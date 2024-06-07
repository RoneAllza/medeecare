<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpsiJawabanStressTable extends Migration
{
    public function up()
    {
        Schema::create('opsi_jawaban_stress', function (Blueprint $table) {
            $table->id('id_jawaban_stress');
            $table->unsignedBigInteger('id_pertanyaan_stress');
            $table->foreign('id_pertanyaan_stress')->references('id_pertanyaan_stress')->on('pertanyaan_stress')->onDelete('cascade');
            $table->integer('jawaban_stress');
            $table->integer('skor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opsi_jawaban_stress');
    }
}
