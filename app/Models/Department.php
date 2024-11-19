<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey  = 'dep_id';
    protected $fillable = [
        'dep_name',
        'dephead_name',
        'email',
        'phone',
        'duration',
        'm_fee',
        'semester_fee',
        'dep_status',
    ];
    
}
