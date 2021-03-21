<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teacher;

class teacherController extends Controller
{
    //
    public function teachers(){
        $teacher = teacher::all();
        $data = [
            "status" => 200,
            "response" => $teacher
        ];
        return response()->json($data);

    }
    
    public function teacher($id){
        $teacher = teacher::find($id);
        if(!empty($teacher)) {
            $data = [
                'status' => 200,
                'response' => $teacher
            ];
        } else {
            $data = [
                'status' => 401,
                'response' => null
            ];
        }
        return response()->json($data);
    }

    public function add(Request $request){
        $teacher = new teacher;
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->save();
        $id = $teacher->id;
        $teach = teacher::find($id);
        $data = [
            'status' => 200,
            'response' => $teach
        ];
        return response()->json($data);
    }
}
