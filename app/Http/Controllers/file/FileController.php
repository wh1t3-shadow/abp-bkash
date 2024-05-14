<?php

namespace App\Http\Controllers\file;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fileModel;

class FileController extends Controller
{
    //
    public function fileUpPageView()
    {
        $data = fileModel::all();
        return view('pages.backend.file.index', compact('data'));
    }

    public function fileUpPageCreate(Request $req)
    {
        $data = new fileModel();

        $data->folder_name = $req->folderName;

        $path = '';

        if ($req->hasFile('fileup')) {


            $file = $req->file('fileup');
            $filename = $file->getClientOriginalName();
            $folder = $data->folder_name;
            $path = $req->file('fileup')->storeAs($folder, $filename, 'public');
        }
        $data->file = '/storage/'.$path;

        $data->save();

        return redirect('/file-up/view');

    }


    public function fileUpPageEditView($id)
    {
        $data = fileModel::findOrFail($id);

        return view('pages.backend.file.edit', compact('data'));
    }

    public function fileUpPageEditUpdate($id, Request $req)
    {
        $data = fileModel::findOrFail($id);

        $data->folder_name = $req->folderName;

        $path = '';

        if ($req->hasFile('fileup')) {


            $file = $req->file('fileup');
            $filename = $file->getClientOriginalName();
            $folder = $data->folder_name;
            $path = $req->file('fileup')->storeAs($folder, $filename, 'public');
        }
        $data->file = '/storage/'.$path;
        $data->save();

        return redirect('/file-up/view');
    }

    public function fileUpPageDelete($id)
    {
        $data = fileModel::findOrFail($id);
        $data->delete();
        
        return redirect('/file-up/view');
    }
}
