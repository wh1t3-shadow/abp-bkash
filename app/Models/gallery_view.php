<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery_view extends Model
{
    use HasFactory;
    protected $fillable = [
       'image',
    ];
}
