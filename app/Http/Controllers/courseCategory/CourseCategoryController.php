<?php

namespace App\Http\Controllers\courseCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\courseCategoryModel;
use Illuminate\Support\Facades\Session;

class CourseCategoryController extends Controller
{
    //
    public function courseCategoryPageView()
    {
        $courseCateg = courseCategoryModel::all();

        // $userId = Session::get('userid');


            return view('pages.backend.courseCategory.index', compact('courseCateg'));
            //return view('pages.backend.courseInfo.index', compact('courseCateg', 'courseInfo'));

    }

    public function courseCategoryPageCreate(Request $req)
    {
        $courseCateg = new courseCategoryModel();

        $courseCateg->course_category = $req->courseCategoryName;
        $courseCateg->save();

        return redirect('/course-category/view');
    }

    public function courseCategoryPageEditView($id)
    {
        $courseCateg = courseCategoryModel::findOrFail($id);

        // $userId = Session::get('userid');


            return view('pages.backend.courseCategory.edit', compact('courseCateg'));
            //return view('pages.backend.courseInfo.index', compact('courseCateg', 'courseInfo'));
      

    }

    public function courseCategoryPageEditUpdate(Request $req, $id)
    {
        $courseCateg = courseCategoryModel::findOrFail($id);

        $courseCateg->course_category = $req->courseCategoryName;
        $courseCateg->save();

        return redirect('/course-category/view');
    }

    public function courseCategoryPageDelete($id)

   {
        $courseCateg = courseCategoryModel::findOrFail($id);

        $courseCateg->delete();

        return redirect('/course-category/view');
    }
}
