<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambal extends Model
{
    use HasFactory;

    protected $table = 'tambals';
    protected $primaryKey = 'id';

    protected $fillable = [
        'doctorName	',
        'patientName	',
        'services',
        'remarks',
        'total',
        'status',
    ];
}
