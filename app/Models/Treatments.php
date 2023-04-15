<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\AppointmentModel;

class Treatments extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'tb_treatments';
    protected $primaryKey = 'treatment_id';

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
    ];

    public function appointments()
    {
        return $this->belongsTo(AppointmentModel::class);
    }

}
