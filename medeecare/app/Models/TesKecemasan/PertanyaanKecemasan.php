<?php

namespace App\Models\TesKecemasan;

use Illuminate\Database\Eloquent\Model;

class PertanyaanKecemasan extends Model
{
    protected $table = 'pertanyaan_kecemasan';
    protected $primaryKey = 'id_pertanyaan_kecemasan';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['id_pertanyaan_kecemasan', 'pertanyaan_kecemasan'];
}
