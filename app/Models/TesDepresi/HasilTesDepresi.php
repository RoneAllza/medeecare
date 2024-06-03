<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilTesDepresi extends Model
{
    // Timestamps are enabled by default, ensure this is not set to false
    public $timestamps = true;

    protected $table = 'hasil_tes_depresi';

    protected $primaryKey = 'id'; // Set the primary key

    protected $fillable = [
        'id_tes', // Add other fillable fields as needed
        'skor_hasil',
        'deskripsi_hasil',
    ];

    // Define the relationship with the tes_depresi table
    public function tesDepresi()
    {
        return $this->belongsTo('App\Models\TesDepresi', 'id_tes');
    }
}
