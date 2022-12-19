<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        "available_time",
        "certificate",
        "image",
        'overview',
        'consultant_id'
    ];
}
