<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\AppointmentModel;
use App\Models\DentistPro;
use App\Models\PersonalInfoModel;
use App\Models\Schedule;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'tb_user';

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'phone_number',
        'photo',
        'registration_num',
        'dentist_pro',
        'user_type',
        'password',
    ];

    public function appointment()
    {
        return $this->hasMany(AppointmentModel::class, 'user_id', 'id');
    }
    public function treatment()
    {
        return $this->hasOne(AppointmentModel::class, 'treatment_id', 'treatment_id');
    } 
    public function dentistpro()
    {
        return $this->hasOne(User::class, 'dentist_pro', 'id');
    }
    public function pinfo()
    {
        return $this->hasMany(PersonalInfoModel::class, 'Personal_information', 'id');
    } 
    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'doctor_id', 'id');
    }
    
}