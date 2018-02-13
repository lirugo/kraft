<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadavatar(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads/avatars'),$imageName);
        return response()->json(['success'=>$imageName]);
    }
}
