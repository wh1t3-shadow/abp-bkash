<?php

namespace App\Http\Controllers;

use App\Models\gallery_view;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class galleryview extends Controller
{

    // fontend

  public function show(){
    $data= gallery_view::get();
    return view('pages.frontend.gallery_view',compact(['data']));
   }


// backend

public Function add_photo(){
    return view('pages.backend.gallery_section.gallery_page');
}

public function submit(Request $request){

    $data1= new gallery_view();
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data1->image = $imageName;
    $data1->save();
    return redirect('gallery-section')->with('submit', 'Data submit');
}






















}
