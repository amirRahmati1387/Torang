<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone_codes extends Model
{
    protected $fillable = [
        "phoneNumber",
        "code"
    ];
}