<?php

namespace App\Http\Controllers;

use App\Models\courseInfoModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class alluser extends Controller
{
    public function show(){
        $user = User::get();
        return view('pages.backend.all_user.all_user', compact(['user']));
    }

    public function edit($id){
        $user1 = User::find($id);
        $data = courseInfoModel::get();
        return view('pages.backend.all_user.user_edit',compact(['user1','data']));

    }

    public function submit(Request $request , $id){




        $data2 = User::find($id);
        $data2->name = $request->input('name');
        $data2->email = $request->input('email');
        $data2->password = $request->input('password');
        $data2->apruv = $request->input('apruv');
        $data2->course_infos_id = $request->input('course_info_id');
        $data2->update();
        return redirect()->back()->with('update' , 'Data update');

    }


    public function delete($id){
        $data3= User::find($id);
         $data3->delete();
         return redirect()->back()->with('update' , 'Data delete');

        }

}
