<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }
       public function user($name)
    {
        return view('user', ['username' => $name]);
    }
    public function task5()
    {
        return view('task5');
    }
    public function task7()
    {
        return view('task7');
    }

 
}
