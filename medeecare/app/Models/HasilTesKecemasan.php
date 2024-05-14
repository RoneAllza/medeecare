<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilTesKecemasan extends Model
{
    protected $table = 'hasil_tes_kecemasan';

    protected $fillable = [
        'skor_hasil',
        'deskripsi_hasil',
    ];
}
