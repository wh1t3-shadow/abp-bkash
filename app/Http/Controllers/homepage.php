<?php

namespace App\Http\Controllers;

use App\Models\courseInfoModel;
use Illuminate\Http\Request;
use App\Models\home_1st;
use App\Models\home_2nd;
use App\Models\home_3rd;
use App\Models\home_4th;
use App\Models\home_5th;
use App\Models\home_6th;
use PhpParser\Node\Expr\FuncCall;

class homepage extends Controller
{


    public function show(){
        $item1= home_1st::latest()->take(1)->get();
        $item2= home_2nd::latest()->take(1)->get();
        $item3 = courseInfoModel::latest()->take(8)->get();
        $item4 = home_4th::latest()->take(3)->get();
        $item5 = home_5th::latest()->take(1)->get();
        $item6 = home_6th::latest()->take(3)->get();
        return view('pages.frontend.home',compact(['item1','item2','item3','item4','item5','item6']));

    }










  public function fastsection(){
    $data2= home_1st::latest()->take(1)->get();
     return view('pages.backend.homepage_fast_section.homepage', compact(['data2']));
  }


  public function fastsection_submit(Request $request){
    $data= new home_1st();
    $data->title = $request->input('title');
    $data->dis = $request->input('dis');
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data->image = $imageName;
    $data->save();
    return redirect('admin-home-page')->with('submit', 'Data submit');
  }


  public function fastedit( $id){
    $data3 = home_1st::find($id);
    return view('pages.backend.homepage_fast_section.homepage_fast_section_edit', compact(['data3']));
}


public function fastupdate(Request $request, $id){
    $data4= home_1st::find($id);
    $data4->title= $request->input('title');
    $data4->dis = $request->input('dis');
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data4->image = $imageName;
    $data4->save();
    return redirect('admin-home-page')->with('update', 'Data update');
}



public function secondsection(){
    $data6= home_2nd::latest()->take(1)->get();
    return view(' pages.backend.home_page_second_section.homepage_second' ,compact(['data6']));
}

public function secondsection_submit(Request $request){
    $data5= new home_2nd();
    $data5->f_title = $request->input('f_title');
    $data5->s_title = $request->input('s_title');
    $data5->t_title = $request->input('t_title');
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data5->image = $imageName;
    $data5->save();
    return redirect('second-section')->with('submit', 'Data submit');

}


public function secondsection_edit($id){
    $data7 = home_2nd::find($id);
    return view('pages.backend.home_page_second_section.homepage_second_edit', compact(['data7']));
}


public function secondsection_update(Request $request, $id){
    $data8= home_2nd::find($id);
    $data8->f_title = $request->input('f_title');
    $data8->s_title = $request->input('s_title');
    $data8->t_title = $request->input('t_title');
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data8->image = $imageName;
    $data8->save();
    return redirect('second-section')->with('update', 'Data update');
}


public function thirdsection(){
    $data10 = home_3rd::latest()->take(8)->get();
    return view('pages.backend.homepage_third.homepage_third', compact(['data10']));
}

public function thirddsection_submit(Request $request){
    $data9 = new home_3rd();
    $data9->title = $request->input('title');
    $data9->batch = $request->input('batch');
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data9->image = $imageName;
    $data9->save();
    return redirect('third-section')->with('submit', 'Data submit');

}

public function thirdsection_edit($id){
    $data11= home_3rd::find($id);
    return view('pages.backend.homepage_third.homepage_third_edit',compact(['data11']));

}

public function thirdsection_update(Request $request, $id){
    $data12 =  home_3rd::find($id);
    $data12->title = $request->input('title');
    $data12->batch = $request->input('batch');
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data12->image = $imageName;
    $data12->update();
    return redirect('third-section')->with('update', 'Data update');
}



public function forthsection(){
    $data13 = home_4th::latest()->take(4)->get();
    return view('pages.backend.homepage_forth_section.homepage_forth',compact(['data13']));
}

public function forthsection_submit(Request $request){
    $data14= new home_4th();
    $data14->title = $request->input('title');
    $data14->dis = $request->input('dis');
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data14->image = $imageName;
    $data14->save();
    return redirect('forth-section')->with('submit', 'Data submit');
}
public function forthsection_edit($id){
    $data15 = home_4th::find($id);
    return view('pages.backend.homepage_forth_section.homepage_forth_edit', compact(['data15']));
}

public function forthsection_update(Request $request, $id){
    $data16 =  home_4th::find($id);
    $data16->title = $request->input('title');
    $data16->dis = $request->input('dis');
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data16->image = $imageName;
    $data16->save();
    return redirect('forth-section')->with('update', 'Data update');
}



public function fifthsection(){
    $data18 = home_5th::latest()->take(1)->get();
    return view('pages.backend.homepage_fifth.homepage_fifth',compact(['data18']));
}

public function fifthsection_submit(Request $request){

    $data17 = new home_5th();
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data17->image = $imageName;
    $data17->title = $request->input('title');
    $data17->iframe = $request->input('iframe');
    $data17->save();
    return redirect('fifth-section')->with('submit', 'Data submit');

}

public function fifthsection_edit($id){
    $data19 = home_5th::find($id);
    return view('pages.backend.homepage_fifth.homepage_fifth_edit', compact(['data19']));
}

public function fifthsection_update( Request $request, $id){

    $data20 =  home_5th::find($id);
    $imageName = time().'.'.$request->file('image')->getClientOriginalName();
    $request->file('image')->move(public_path('/images'), $imageName);
    $data20->image = $imageName;
    $data20->title = $request->input('title');
    $data20->iframe = $request->input('iframe');
    $data20->save();
    return redirect('fifth-section')->with('update', 'Data update');
}
















}
