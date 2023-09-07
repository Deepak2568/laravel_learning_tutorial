<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function upload(){
        return view('upload_form');
    }

    public function upload_save(Request $request){
        $request->validate([
            'fileToUpload' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);
        $data = time().'.'.$request->fileToUpload->extension();
        $request->fileToUpload->move(public_path('images'),$data);
        return back()->withMessage('File Uploaded Successfully')->withImageName($data);

    }
}
