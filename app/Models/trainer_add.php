<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainer_add extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'image',
    ];
}
