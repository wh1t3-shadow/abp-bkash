<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseInfoModel extends Model
{
    use HasFactory;

    protected $table = 'course_infos';

    public function courseCategoryModel()
    {

        return $this->belongsTo(courseCategoryModel::class, 'course_category_id');
    }

    public function CourseContentModel(){
        return $this->hasMany(CourseContentModel::class, 'course_title_id');
    }
}
