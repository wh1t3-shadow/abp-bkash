<?php

namespace App\Http\Controllers;

use App\Models\CourseContentModel;
use App\Models\courseInfoModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class student_panal extends Controller
{
   public function show(){
    $data= Auth::id();
    $data2= User::find($data);
    $data9 = courseInfoModel::where('id','=',$data2->course_infos_id)->get();
    $data1=courseInfoModel::with('CourseContentModel')->where('id','=', $data2->course_infos_id)->get();
    // $data3= CourseContentModel::where('course_title_id','=',$data2->course_infos_id)->with('courseInfoModel')->get();
    return view('pages.backend.student_panal.student_panal',compact(['data2','data9','data1']));
// dd($data1);
   }

   public function logout(){
    auth::logout();
    return redirect('/login');
   }

   public function apruv(){
    $data4= Auth::id();
    $data5= User::find($data4);
    return view('pages.backend.student_panal.apruv',compact(['data5']));
   }
}
