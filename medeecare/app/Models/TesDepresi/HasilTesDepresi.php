<?php

namespace App\Models\TesDepresi;

use Illuminate\Database\Eloquent\Model;

class HasilTesDepresi extends Model
{
    protected $table = 'hasil_tes_depresi';

    protected $fillable = [
        'skor_hasil', 'deskripsi_hasil', 'jawaban',
    ];
}
