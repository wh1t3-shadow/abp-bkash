<?php

namespace App\Http\Controllers\courseBatch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courseInfoModel;
use App\Models\courseBatchModel;
use Illuminate\Support\Facades\Session;

class CourseBatchController extends Controller
{
    //
    public function courseBatchPageView()
    {
        $courseName = courseInfoModel::all();
        $courseBatch = courseBatchModel::all();

        // $userId = Session::get('userid');


            return view('pages.backend.courseBatch.index', compact('courseName', 'courseBatch'));
            //return view('pages.backend.courseInfo.index', compact('courseCateg', 'courseInfo'));


    }

    public function courseBatchPageCreate(Request $req)
    {
        $courseBatch = new courseBatchModel();

        $courseBatch->course_name_id = $req->courseName;
        $courseBatch->course_batch = $req->courseBatch;
        $courseBatch->course_avail_seat = $req->courseAvailSeat;
        $courseBatch->course_num_class = $req->courseNumClass;
        $courseBatch->course_fee = $req->courseFee;
        $courseBatch->course_batch_start = $req->courseStart;
        $courseBatch->course_batch_end = $req->courseEnd;
        $courseBatch->course_last_date_regist = $req->courseLastDateRegist;

        $courseBatch->save();

        return redirect('/course-batch/view');
    }

    public function courseBatchPageEditView($id)
    {
        $courseName = courseInfoModel::all();
        $courseBatch = courseBatchModel::findOrFail($id);

        // $userId = Session::get('userid');


            return view('pages.backend.courseBatch.edit', compact('courseName', 'courseBatch'));
            //return view('pages.backend.courseInfo.index', compact('courseCateg', 'courseInfo'));
   

    }

    public function courseBatchPageEditUpdate($id, Request $req)
    {
        $courseBatch = courseBatchModel::findOrFail($id);

        $courseBatch->course_name_id = $req->courseName;
        $courseBatch->course_batch = $req->courseBatch;
        $courseBatch->course_avail_seat = $req->courseAvailSeat;
        $courseBatch->course_num_class = $req->courseNumClass;
        $courseBatch->course_fee = $req->courseFee;
        $courseBatch->course_batch_start = $req->courseStart;
        $courseBatch->course_batch_end = $req->courseEnd;
        $courseBatch->course_last_date_regist = $req->courseLastDateRegist;

        //dd($courseBatch);

        $courseBatch->save();

        return redirect('/course-batch/view');
    }

    public function courseBatchPageDelete($id)
    {
        $courseBatch = courseBatchModel::findOrFail($id);

        $courseBatch->delete();

        return redirect('/course-batch/view');
    }
}
