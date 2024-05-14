<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseBatchModel extends Model
{
    use HasFactory;

    protected $table = 'course_batches';

    public function courseInfoModel()
    {
        return $this->belongsTo(courseInfoModel::class, 'course_name_id');
    }
}