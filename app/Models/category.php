<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Artikel;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $guarded=['id'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value, '-');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Artikel(){
        return $this->hasMany(Artikel::class,'categories_id','id');
    }
}
 