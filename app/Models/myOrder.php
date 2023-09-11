<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myOrder extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'category_id',
        'name',
        'desc',
        'stock',
        'image',
        'price',
    ];
}
