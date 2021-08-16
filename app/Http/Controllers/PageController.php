<?php

namespace App\Http\Controllers;

use App\About;
use App\Index;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
   {
       return view('index');
   }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }
    public function recipe()
    {
        return view('recipe');
    }
}
