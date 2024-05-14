<?php

namespace App\Http\Controllers;

use App\Models\courseInfoModel;
use App\Models\enroll;
use Illuminate\Http\Request;

class enrollcontroller extends Controller
{
    public function show($id){
        $data= courseInfoModel::find($id);
        return view('pages.frontend.enroll', compact(['data']));
    }

    public function submit( Request $request){
        $data1= new enroll();
        $data1->course = $request->input('course');
        $data1->name = $request->input('name');
        $data1->email = $request->input('email');
        $data1->number = $request->input('number');
        $data1->save();
        return redirect()->back()->with('submit', 'Data submited');
    }

    public function admin_show(){
        $data2= enroll::get();
        return view('pages.backend.enroll',compact(['data2']));
    }

    public function delete($id){
        $data3= enroll::find($id);
        $data3->delete();
        return redirect()->back()->with('submit', 'Data delete');

    }
}
