<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PertanyaanKecemasan extends Model
{
    protected $table = 'pertanyaan_kecemasan';

    protected $fillable = [
        'pertanyaan_kecemasan',
    ];

    public function opsiJawaban()
    {
        return $this->hasMany(OpsiJawabanKecemasan::class, 'id_pertanyaan_kecemasan');
    }
}
