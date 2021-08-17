<?php

namespace App\Http\Controllers\BACKEND;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function postContact(Request $request){

        $array = collect($request->only(['name', 'email', 'message', 'phone_number']))->all();
        Contact::create($array);
        return redirect()->route('home.page')->with('success, contact sent successfully');
    }
}
