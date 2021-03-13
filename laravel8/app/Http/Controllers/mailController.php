<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailController extends Controller
{
    //
    public function html_email() {
        $data = array('name'=>"Asad");
        Mail::send('mail.test', $data, function($message) {
           $message->to('axad03213@gmail.com', 'Asad Mukhtar')->subject
              ('Laravel HTML Testing Mail');
           $message->from('axad03213@gmail.com','Asad Mukhtar');
        });
        echo "HTML Email Sent. Check your inbox.";
     }
}
