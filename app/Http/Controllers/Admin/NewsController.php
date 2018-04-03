<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create(){
        return view('admin.news.create');
    }

    public function createpost(Request $request){
        //Validate
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        //Save
        $new = new News();
        $new->title = $request->title;
        $new->body = $request->body;
        $new->save();
        //Set flash message
        Session::flash('success', "Data was updated.");
        return redirect('admin');
    }
}
