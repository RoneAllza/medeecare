<?php

// app/Models/NotificationSetting.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationSetting extends Model
{
    protected $fillable = [
        'condition', // Jenis kondisi kesehatan yang dipantau
        'threshold', // Ambang batas nilai yang memicu notifikasi
    ];
}
