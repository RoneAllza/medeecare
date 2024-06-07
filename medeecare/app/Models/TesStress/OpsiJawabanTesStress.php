<?php

namespace App\Models\TesStress;

use Illuminate\Database\Eloquent\Model;

class OpsiJawabanTesStress extends Model
{
    protected $table = 'opsi_jawaban_stress';
    protected $primaryKey = 'id_jawaban_stress';
    protected $fillable = ['id_pertanyaan_stress', 'jawaban_stress', 'skor'];

    public function pertanyaan()
    {
        return $this->belongsTo(PertanyaanStress::class, 'id_pertanyaan_stress', 'id_pertanyaan_stress');
    }
}
