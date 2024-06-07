<?php

namespace App\Models\TesDepresi;

use Illuminate\Database\Eloquent\Model;

class PertanyaanDepresi extends Model
{
    protected $table = 'pertanyaan_depresi';
    protected $primaryKey = 'id_pertanyaan_depresi';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['id_pertanyaan_depresi', 'pertanyaan_depresi'];
}
