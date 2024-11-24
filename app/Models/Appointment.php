<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';

    // The attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'doctor_id',
        'name',
        'phone',
        'email',
        'message',
    ];

    // Define relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship with the Doctor model (Medecin)
    public function doctor()
    {
        return $this->belongsTo(Medecin::class);
    }
}
