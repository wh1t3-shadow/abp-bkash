<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContentModel extends Model
{
    use HasFactory;

    protected $table = 'coursecontents';

    public function courseInfoModel()
    {

        return $this->belongsTo(courseInfoModel::class, 'course_title_id');
    }
}
