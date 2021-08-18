<?php

namespace App\Http\Controllers\BACKEND;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function postContact(Request $request){
      $this->validate($request,[
         'name'=> 'required',
        'email'=> 'required' ,
         'message'=> 'required' ,
         'phone_number'=> 'required' ,
      ]);
        $array = collect($request->only(['name', 'email', 'message', 'phone_number']))->all();
       $status = Contact::create($array);
       if ($status){
           return redirect()->route('home.page')->with('success', 'Message sent successfully');

       }
       else{
           return back()->with('errors', 'something went wrong');
       }
    }
}
