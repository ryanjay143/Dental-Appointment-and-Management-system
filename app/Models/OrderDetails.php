<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $primaryKey = 'id';

    protected $fillable = [
        
        'firstname',
        'order_id',
        'product_name',
        'product_image',
        'quantity',
        'subTotal',
        'status',

    ];
}
