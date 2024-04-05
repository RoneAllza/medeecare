<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasipenyakit extends Model
{
    use HasFactory;
    protected $table = "informasipenyakit";
    protected $fillable = [
        'id','judul'
    ];          
}
