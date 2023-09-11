<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    protected $primaryKey = 'id';

    protected $fillable = [
        
        'product_id',
        'exp_date',
        'qty',
        'status',
        
    ];
}
