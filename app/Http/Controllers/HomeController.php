<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeIDPage($id)
    {
        return view('home', ['id' => $id, 'name' => 'Guest']);
    }

    public function homeIDNamePage($id, $name)
    {
        return view('home', ['id' => $id, 'name' => $name]);
    }
}
