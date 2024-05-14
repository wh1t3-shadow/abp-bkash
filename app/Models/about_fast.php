<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_fast extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'dis',

    ];
}
