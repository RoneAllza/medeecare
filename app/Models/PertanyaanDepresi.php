<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PertanyaanDepresi extends Model
{
    protected $table = 'pertanyaan_depresi';

    protected $fillable = [
        'pertanyaan_depresi',
    ];

    public function opsiJawaban()
    {
        return $this->hasMany(OpsiJawabanKecemasan::class, 'id_pertanyaan_depresi');
    }
}
