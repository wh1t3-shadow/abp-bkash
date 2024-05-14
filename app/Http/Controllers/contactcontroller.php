<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class contactcontroller extends Controller
{
    public function show(){
        return view('pages.frontend.contact');
    }

    public function submit(Request $request){
        $data = new contact();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->massage = $request->input('massage');
        $data->save();
        return redirect()->back()->with('submit', 'Data submited');
    }

    // backend

    public function contact_show(){
        $data2 = contact::get();
        return view('pages.backend.contact', compact(['data2']));

    }

    public function contact_delete($id){
        $data3 = contact::find($id);
        $data3->delete();
        return redirect()->back()->with('submit', 'Data deleted');


    }
}
