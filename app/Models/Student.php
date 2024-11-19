<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey  = 'std_id';
    protected $fillable = [
        'name',
        'f_name',
        'm_name',
        'dob',
        'address',
        'email',
        'number',
        'g_name',
        'g_number',
        'g_rel',
        'dep',
        's_id',
        's_batch',
        's_section',
        'status',
        'image',
    ];
}



