<?php

namespace App\Http\Controllers\courseInfo;

use Illuminate\Http\Request;
use App\Models\courseInfoModel;
use App\Models\CustomAuthModel;
use App\Models\CourseContentModel;
use App\Models\courseCategoryModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\courseBatchModel;
use App\Models\trainer_add;

class CourseInfoController extends Controller
{
    //frontend
    public function show_course(){
        $dta = courseInfoModel::paginate(9);
        return view('pages.frontend.course_list',compact(['dta']));
    }








    public function show_single($id){
        $item1 = courseInfoModel::with('CourseContentModel')->find($id);
        // $item2 = CourseContentModel::where('course_title_id','=',$item1->id)->get();
        $item3 = courseBatchModel::get();
        $item4 = trainer_add::latest()->take(6)->get();
        return view('pages.frontend.course_single',compact(['item1','item3','item4',]));
        // dd($item1);
    }


    // backend
    public function courseInfoPageView()
    {
        $courseCateg = courseCategoryModel::all();
        $courseInfo = courseInfoModel::all();
        // $userId = Session::get('userid');


            return view('pages.backend.courseInfo.index', compact('courseCateg', 'courseInfo'));

    }

    public function courseInfoPageCreate(Request $req)
    {
        $courseInfo = new courseInfoModel;

        $courseInfo->course_title = $req->courseTitle;
        $courseInfo->course_category_id = $req->courseCategory;

        // $path = '';
        if ($req->hasFile('courseImage')) {
            // $file = $req->file('courseImage');
            // $filename = $file->getClientOriginalName();
            // $folder = $courseInfo->course_title;
            // $path = $req->file('courseImage')->storeAs($folder, $filename, 'public');


            $imageName = time().'.'.$req->file('courseImage')->getClientOriginalName();
            $req->file('courseImage')->move(public_path('/images'), $imageName);

        }
        $courseInfo->course_image = $imageName;

        $path = '';
        if ($req->hasFile('courseDocument')) {
            $file = $req->file('courseDocument');
            $filename = $file->getClientOriginalName();
            $folder = $courseInfo->course_title;
            $path = $req->file('courseDocument')->storeAs($folder, $filename, 'public');
        }
        $courseInfo->course_document = 'storage/'.$path;
        $courseInfo->course_duration = $req->courseDuration;
        $courseInfo->course_description = $req->courseDescription;

        $courseInfo->save();

        return redirect('/course-info/view');
    }


    public function courseInfoPageEditView($id)
    {
        $courseCateg = courseCategoryModel::all();
        $courseInfo = courseInfoModel::findOrFail($id);

        // $userId = Session::get('userid');


            return view('pages.backend.courseInfo.edit', compact('courseCateg', 'courseInfo'));
       

    }

    public function courseInfoPageEditUpdate(Request $req, $id)
    {
        $courseInfo = courseInfoModel::findOrFail($id);

        $courseInfo->course_title = $req->courseTitle;
        $courseInfo->course_category_id = $req->courseCategory;


        // $path = '';
        if ($req->hasFile('courseImage')) {
            // $file = $req->file('courseImage');
            // $filename = $file->getClientOriginalName();
            // $folder = $courseInfo->course_title;
            // $path = $req->file('courseImage')->storeAs($folder, $filename, 'public');
            $imageName = time().'.'.$req->file('courseImage')->getClientOriginalName();
            $req->file('courseImage')->move(public_path('/images'), $imageName);
        }
        $courseInfo->course_image = $imageName;


        $path = '';
        if ($req->hasFile('courseDocument')) {
            $file = $req->file('courseDocument');
            $filename = $file->getClientOriginalName();
            $folder = $courseInfo->course_title;
            $path = $req->file('courseDocument')->storeAs($folder, $filename, 'public');
        }
        $courseInfo->course_document = '/storage/'.$path;
        $courseInfo->course_duration = $req->courseDuration;
        $courseInfo->course_description = $req->courseDescription;

        $courseInfo->save();

        return redirect('/course-info/view');
    }

    public function courseInfoPageDelete($id)
    {
        $courseInfo = courseInfoModel::findOrFail($id);

        $courseInfo->delete();

        return redirect('/course-info/view');
    }










}
