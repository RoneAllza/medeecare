<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\penyakit;

class obat extends Model
{
    use HasFactory;

    protected $table="obat";
    protected $guarded=['id'];

    public function penyakit(){
        return $this->belongsTo(penyakit::class,'penyakit_id','id');
    }
    public function getRouteKeyName()
    {
        return 'nama_obat';
    }

}
