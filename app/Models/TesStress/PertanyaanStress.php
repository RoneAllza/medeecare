<?php

namespace App\Models\TesStress;

use Illuminate\Database\Eloquent\Model;

class PertanyaanStress extends Model
{
    protected $table = 'pertanyaan_stress';
    protected $primaryKey = 'id_pertanyaan_stress';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['id_pertanyaan_stress', 'pertanyaan_stress'];
}
