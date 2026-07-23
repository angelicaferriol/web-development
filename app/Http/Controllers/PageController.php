<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutPage($id, $name)
    {
        return "<h1><a href= '" . route('home', ['id' => $id, 'name' => $name]) . "'>Go to Home.</a></h1>";
    }

    public function contactPage(){
         return view('contact');
    }
}
