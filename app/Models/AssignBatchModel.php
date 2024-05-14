<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignBatchModel extends Model
{
    use HasFactory;

    protected $table = 'assign_batches';

    public function courseBatchModel()
    {
        return $this->belongsTo(courseBatchModel::class, 'course_batch_id');
    }

    public function AdmissionAcceptanceList()
    {
        return $this->belongsTo(AdmissionAcceptanceList::class, 'accepted_student_id');
    }
}