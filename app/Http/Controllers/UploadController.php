<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadavatar(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->hashName();
        $image->move(public_path('uploads/avatars'),$imageName);
        return response()->json(['success'=>$imageName]);
    }

    public function uploadscan(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->hashName();
        $image->move(public_path('uploads/scandocs'),$imageName);
        return response()->json(['success'=>$imageName]);
    }

    public function uploadphoto(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->hashName();
        $image->move(public_path('uploads/objects'),$imageName);
        return response()->json(['success'=>$imageName]);
    }

    public function uploadreport(Request $request){
        $image = $request->file('file');
        $imageName = $image->hashName();
        $image->move(public_path('uploads/reports'),$imageName);
        return response()->json(['success'=>$imageName]);
    }
}
