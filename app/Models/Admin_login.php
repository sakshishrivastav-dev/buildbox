<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_login extends Model
{


    protected $fillable = [
            'email','password','hashed_passowrd','username'
    ];
    use HasFactory;
}
