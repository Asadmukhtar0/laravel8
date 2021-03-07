<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\badge;
use App\Models\student;
class badgeController extends Controller
{
    //
    public function index(){
        $teachers = teacher::all();
        $badges   = badge::orderby('id','DESC')->get();
        return view('badge',compact('teachers','badges'));
    }
    public function store(Request $request){
        $badge = new badge;
        $badge->title = $request->title;
        $badge->teacher_id = $request->teacher;
        $badge->save();
        return redirect()->back();  
    }
    public function search($id){
        $students = student::where('badge_id',$id)->get();
        $badges   = badge::orderby('id','DESC')->get();
        return view('addstudent',compact('badges','students'));
    }
}
