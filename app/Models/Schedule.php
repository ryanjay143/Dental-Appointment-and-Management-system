<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';

    protected $fillable = [
        'doctor_id',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'unavailability',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
