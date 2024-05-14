<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_6th;

class blogcontroller extends Controller
{

    // frontend section

    public function show(){
        $data = home_6th::get();
        return view('pages.frontend.blog',compact(['data']));
    }

    public function single_show($id){
        $data1= home_6th::find($id);
        return view('pages.frontend.blog_single',compact(['data1']));
    }



    // backend section
    public function sixsection(){
        $data22 = home_6th::latest()->take(3)->get();
        return view('pages.backend.homepage_six.homepage_six', compact(['data22']));
    }

    public function sixsection_submit(Request $request){

        $data21= new home_6th() ;
        $data21->title = $request->input('title');
        $data21->dis = $request->input('dis');
        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data21->image = $imageName;
        $data21->save();
        return redirect('six-section')->with('submit', 'Data submit');

    }


    public function sixsection_edit($id){
        $data23 = home_6th::find($id);
        return view('pages.backend.homepage_six.homepage_six_edit',compact(['data23']));
    }

    public function sixsection_update(Request $request ,$id){
        $data24= home_6th::find($id);
        $data24->title= $request->input('title');
        $data24->dis = $request->input('dis');
        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data24->image = $imageName;
        $data24->save();
        return redirect('six-section')->with('update', 'Data update');
    }

}
