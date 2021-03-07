<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\badge;
use App\Models\student;
class studentController extends Controller
{
    //
    public function index(){
        $badges   = badge::orderby('id','DESC')->get();
        $students   = student::orderby('id','DESC')->get();
        return view('addstudent',compact('badges','students'));
    }
    public function store(Request $request){
        $student = new student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->badge_id = $request->badge; 
        $student->save();
        return redirect()->back();
    }
}
