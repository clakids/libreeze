<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('common.index')->with('locator',$locator = 0);
    }
    
    public function about(){
        return view('common.about')->with('locator',$locator = 1);
    }

    public function contact(){
        return view('common.contact')->with('locator',$locator = 2);
    }
}
