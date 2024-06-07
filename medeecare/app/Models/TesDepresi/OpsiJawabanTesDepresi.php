<?php

namespace App\Models\TesDepresi;

use Illuminate\Database\Eloquent\Model;

class OpsiJawabanTesDepresi extends Model
{
    protected $table = 'opsi_jawaban_depresi';
    protected $primaryKey = 'id_jawaban_depresi';
    protected $fillable = ['id_pertanyaan_depresi', 'jawaban_depresi', 'skor'];

    public function pertanyaan()
    {
        return $this->belongsTo(PertanyaanDepresi::class, 'id_pertanyaan_depresi', 'id_pertanyaan_depresi');
    }
}
