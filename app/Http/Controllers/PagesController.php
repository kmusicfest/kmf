<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getIndex() {
        return view('welcome');
    }

    public function getAbout() {
        return view('pages.about');
    }
    public function getContact() {
        return view('pages.contact');
    }
    public function getGallery() {
        return view('pages.gallery');
    }

    public function postContact(Requests $request) {
        $this->validate($request, ['email'=> 'required|email', 'name' => 'min:2', 'message'=>'min:10']);
         
        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message );
        mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('event@kmusicfest.com');
            $message->name($data['name']);
        });   
    }
}


