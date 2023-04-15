<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DentistPro extends Model
{
    use HasFactory;

    protected $table = 'tb_dentist_pro';
    protected $primaryKey = 'id';

    protected $fillable = [
        'profession',
    ];
    public function user()
    {
        return $this->belongsTo(DentistPro::class, 'dentist_pro');
        
    }


}
