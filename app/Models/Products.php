<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Products extends Model
{
    use HasFactory;

    protected $table = 'tb_dental_product';
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_id',
        'name',
        'desc',
        'image',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
