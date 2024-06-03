<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\obat;

class penyakit extends Model
{
    use HasFactory;
    protected $table='penyakit';
    protected $guarded=['id'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '-');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function obat(){
        return $this->hasMany(obat::class,'penyakit_id','id');
    }
}
 