<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServicePayment;
use App\Models\Payment_details;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'payment_method',
    ];

    public function servicePayment()
    {
        return $this->hasMany(ServicePayment::class, 'payment_id', 'id');
    }
    public function payment_details()
    {
        return $this->hasMany(Payment_details::class, 'payment_id', 'id');
    }
}
