<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class usersController extends Controller
{
    //
    public function users(){
        $users = User::find(1);
        $data = [
            'status'   => '200',
            'token'    => 'sadasdasdasdgasjkfgfsadg',
            'response' => $users
        ];
        //return $users;
        return response()->json($data);
    }
}
