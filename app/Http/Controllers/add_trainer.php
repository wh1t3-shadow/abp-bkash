<?php

namespace App\Http\Controllers;

use App\Models\trainer_add;
use Illuminate\Http\Request;

class add_trainer extends Controller
{
   public function add_trainer(){
    $data1 = trainer_add::get();
    return view('pages.backend.trainer_add.trainer_add',compact(['data1']));
   }

   public function trainer_submit(Request $request){
        $data = new trainer_add();

        $data->name = $request->input('name');
        $data->detail = $request->input('detail');

        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data->image = $imageName;
        $data->save();
        return redirect('trainer-add')->with('submit', 'Data submit');
   }


   public function trainer_edit($id){
    $data2 = trainer_add::find($id);
    return view('pages.backend.trainer_add.trainer_edit',compact(['data2']));

   }

   public function trainer_update(Request $request, $id){
        $data3 = trainer_add::find($id);
        $data3->name = $request->input('name');
        $data3->detail = $request->input('detail');

        $imageName = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images'), $imageName);
        $data3->image = $imageName;
        $data3->save();
        return redirect('trainer-add')->with('submit', 'Data submit');
   }

   public function trainer_delete($id){
         $data4 = trainer_add::find($id);
         $data4->delete();
         return redirect('trainer-add');
   }
}
