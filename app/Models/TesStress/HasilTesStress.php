<?php

namespace App\Models\TesStress;

use Illuminate\Database\Eloquent\Model;

class HasilTesStress extends Model
{
    protected $table = 'hasil_tes_stress';

    protected $fillable = [
        'skor_hasil', 'deskripsi_hasil', 'jawaban',
    ];
}
