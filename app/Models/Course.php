<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey  = 'c_id';
    protected $fillable = [
        'c_name',
        'dep',
        'duration',
        'm_fee',
        'semester_fee',
        'status',
    ];
}
