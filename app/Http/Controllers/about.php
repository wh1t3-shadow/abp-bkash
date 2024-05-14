<?php

namespace App\Http\Controllers;

use App\Models\about_fast;
use Illuminate\Http\Request;

class about extends Controller
{

// frontend
public function show(){
    $item1 = about_fast::get();
    return view('pages.frontend.about',compact(['item1']));
}




    // backend
    public function add_about(){
        $data1 = about_fast::get();
        return view('pages.backend.about.about_fast',compact(['data1']));
    }

    public function about_submit(Request $request){
        $data= new about_fast();
        $data->title = $request->input('title');
        $data->dis = $request->input('dis');
        $data->save();
        return redirect('about-add')->with('submit', 'Data submit');
    }

    public function about_edit($id){
        $data2 = about_fast::find($id);
        return view('pages.backend.about.about_fast_edit',compact(['data2']));
    }

    public function about_update(Request $request , $id){
        $data3 = about_fast::find($id);
        $data3->title = $request->input('title');
        $data3->dis = $request->input('dis');
        $data3->save();
        return redirect('about-add')->with('update', 'Data update');
    }
}
