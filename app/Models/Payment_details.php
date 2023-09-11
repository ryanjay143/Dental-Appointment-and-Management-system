<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;

class Payment_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'payment_id',
        'order_id',
        'orderNum',
        'patientName',
        'total_amount',
        'amount',
        'status',
    ];

    public function bayad()
    {
        return $this->belongsTo(Payment::class,'payment_id');
    }
}
