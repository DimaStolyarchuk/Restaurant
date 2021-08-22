<?php

namespace App\Http\Controllers;

use App\About;
use App\Entry;
use App\Index;
use App\Recipe;
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
        $dataRecipes = Recipe::get();
        return view('recipe', compact('dataRecipes'));
    }


    public function entry()
    {
        $dataEntry = Entry::get();
        return view('entry',compact('dataEntry'));
    }
}
