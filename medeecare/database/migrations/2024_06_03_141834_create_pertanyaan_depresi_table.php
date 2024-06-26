<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanDepresiTable extends Migration
{
    public function up()
    {
        Schema::create('pertanyaan_depresi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pertanyaan_depresi')->primary();
            $table->text('pertanyaan_depresi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pertanyaan_depresi');
    }
}
