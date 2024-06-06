<?php

namespace App\Models\TesKecemasan;

use Illuminate\Database\Eloquent\Model;

class OpsiJawabanTesKecemasan extends Model
{
    protected $table = 'opsi_jawaban_kecemasan';
    protected $primaryKey = 'id_jawaban_kecemasan';
    protected $fillable = ['id_pertanyaan_kecemasan', 'jawaban_kecemasan', 'skor'];

    public function pertanyaan()
    {
        return $this->belongsTo(PertanyaanKecemasan::class, 'id_pertanyaan_kecemasan', 'id_pertanyaan_kecemasan');
    }
}
