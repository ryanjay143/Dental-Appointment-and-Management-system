<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PersonalInfoModel extends Model
{
    use HasFactory;

    protected $table = 'tb_p_info';
    protected $primaryKey = 'id';

    protected $fillable = [
        'Personal_information',
        'month',
        'day',
        'year',
        'location',
        'state',
        'zip_code',
        'status',
        'gender',
        'E_firstname',
        'E_lastname',
        'relationship',
        'E_contact_num',
        'weight',
        'height',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Personal_information');
    }
}
