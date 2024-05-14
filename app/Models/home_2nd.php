<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_2nd extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_title',
        's_title',
        't_title',
        'image',
    ];
}
