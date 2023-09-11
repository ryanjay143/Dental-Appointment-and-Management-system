<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;

class ServicePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'payment_id',
        'doctorName',
        'patientName',
        'services',
        'reference',
        'total',
        'moneyAmount',
        'status',
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
   
}
