<?php

namespace App\Http\Controllers\courseContent;

use App\Http\Controllers\Controller;
use App\Http\Controllers\courseInfo\CourseInfoController;
use App\Models\CourseContentModel;
use Illuminate\Http\Request;
use App\Models\courseInfoModel;
use Illuminate\Support\Facades\Session;

class CourseContentController extends Controller
{
    //
    public function courseContentPageView()
    {
        $courseInfo = courseInfoModel::all();
        $courseContent = CourseContentModel::all();

        // $userId = Session::get('userid');


            return view('pages.backend.courseContent.index', compact('courseInfo', 'courseContent'));
            //return view('pages.backend.courseInfo.index', compact('courseCateg', 'courseInfo'));

    }

    public function courseContentPageCreate(Request $req)
    {
        $courseContent = new CourseContentModel();

        $courseContent->course_content_title = $req->courseContentTitle;
        $courseContent->course_title_id = $req->courseTitle;
        $courseContent->course_content_link = $req->courseContentLink;

        $courseContent->save();

        return redirect('/course-content/view');
    }

    public function courseContentPageEditView($id)
    {
        $courseInfo = courseInfoModel::all();
        $courseContent = CourseContentModel::findOrFail($id);

        // $userId = Session::get('userid');

            return view('pages.backend.courseContent.edit', compact('courseInfo', 'courseContent'));
            //return view('pages.backend.courseInfo.index', compact('courseCateg', 'courseInfo'));
      

    }

    public function courseContentPageEditUpdate($id, Request $req)
    {
        $courseContent = CourseContentModel::findOrFail($id);

        $courseContent->course_content_title = $req->courseContentTitle;
        $courseContent->course_title_id = $req->courseTitle;
        $courseContent->course_content_link = $req->courseContentLink;

        $courseContent->save();

        return redirect('/course-content/view');
    }

    public function courseContentPageDelete($id)
    {
        $courseContent = CourseContentModel::findOrFail($id);

        $courseContent->delete();

        return redirect('/course-content/view');
    }




}
