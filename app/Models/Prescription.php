<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $table = 'prescription_payments';
    protected $primaryKey = 'id';

    protected $fillable = [
        
        'DoctorName',
        'PatientName',
        'Service',
        'price',
        
    ];
}
