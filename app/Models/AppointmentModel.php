<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Treatments;

class AppointmentModel extends Model
{
    use HasFactory;

    protected $table = 'tb_appointment';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'treatment_id',
        'date',
        'time',
        'select_doctor',
        'message',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function treatment()
    {
        return $this->hasOne(Treatments::class, 'treatment_id', 'treatment_id');
    }
}
