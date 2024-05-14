<?php

namespace App\Http\Controllers\assignBatch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courseBatchModel;
use App\Models\AdmissionAcceptanceList;
use App\Models\AssignBatchModel;

class AssignBatchController extends Controller
{
    //
    public function assignBatchPageView()
    {
        $acceptedStudent = AdmissionAcceptanceList::all();
        $batchList = courseBatchModel::all();
        return view('pages.backend.assignBatch.index', compact('acceptedStudent', 'batchList'));
    }

    public function assignBatchPageCreate(Request $req)
    {
        $assignStudent = new AssignBatchModel();
        $assignStudent->course_batch_id = $req->courseBatchName;
        $assignStudent->accepted_student_id = $req->acceptedStudentName;

        $assignStudent->save();

        return redirect('/assign-batch/view');
    }

    
}