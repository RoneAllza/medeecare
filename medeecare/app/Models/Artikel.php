<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Artikel extends Model
{
    use HasFactory;

    protected $table="articles";
    protected $guarded=['id'];

    public function Category(){
        return $this->belongsTo(Category::class,'categories_id','id');
    }
    public function getRouteKeyName()
    {
        return 'judul';
    }

}
