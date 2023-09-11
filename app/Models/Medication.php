<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;

    protected $table = 'tb_medicine';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'desc',
        'status',
    ];
}
