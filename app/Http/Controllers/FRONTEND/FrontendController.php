<?php

namespace App\Http\Controllers\FRONTEND;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage(){
        return view('frontend.pages.welcome');
    }
    public function resume(){
        return view('frontend.pages.resume');
    }
    public function contactUs(){
        return view('frontend.pages.contact');
    }
}
