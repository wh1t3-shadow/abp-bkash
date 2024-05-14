<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_5th extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'iframe',
    ];
}
