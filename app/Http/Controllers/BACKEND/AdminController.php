<?php

namespace App\Http\Controllers\BACKEND;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getContact(){
        return view('backend.pages.contact');
    }
}
