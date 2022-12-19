<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointemnet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'consultant_id',
        'message',
        
    ];
}
