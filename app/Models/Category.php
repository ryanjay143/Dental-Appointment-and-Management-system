<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Category extends Model
{
    use HasFactory;

    protected $table = 'tb_category';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'image',
        'desc',
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'category_id');
    }
}
