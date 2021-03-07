<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use DB;

class teacherController extends Controller
{
    //
    public function index(){
        $teachers = teacher::orderby('id','DESC')->get();
        return view('addteacher', compact('teachers'));
    }
    public function store(Request $request){
        $teacher = new teacher;
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->save();
        return redirect()->back();
    }
}
