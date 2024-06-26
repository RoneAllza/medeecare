<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'risk_level',
        'password',
        'role',
        'bday',
        'photo',
        'gender',
        'phone',
        'address',
        'age',
        'bb',
        'tb',
        'personal_info', 
        'health_history', 
        'activity_report',
        'diabetes_risk',
    ];
    
    public function setBdayAttribute($value)
    {
        // Check if the date value is valid
        if ($value !== '0000-00-00') {
            $this->attributes['bday'] = $value;
        } else {
            // Set default value or NULL if not valid
            $this->attributes['bday'] = null; // Or according to the desired default value
        // Periksa apakah nilai tanggal valid
        if ($value !== '0000-00-00') {
            $this->attributes['bday'] = $value;
        } else {
            // Set nilai default atau NULL jika tidak valid
            $this->attributes['bday'] = null; // Atau sesuai dengan nilai default yang diinginkan
        }
    }
    }
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
