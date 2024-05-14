<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_3rd extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'batch',
        'image',
    ];
}
