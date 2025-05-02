<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $fillable = [
        'couse_name','course_code','couse_duration','Department','course_description'
    ];

    
    use HasFactory;
}
