<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Treatments;

class AppointModel extends Model
{
    use HasFactory;

    protected $table = 'tb_appointment';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'treatment_id',
        'date',
        'time',
        'message',
        'status',
    ];
    public function treatment()
    {
        return $this->belongsTo(Treatments::class);
    }
}
