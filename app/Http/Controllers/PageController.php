<?php

namespace App\Http\Controllers;

use App\About;
use App\Index;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
   {
       $dateIndexs = Index::get();
       return view('index', compact('dateIndexs'));
   }
    public function about()
    {

        return view('about',compact('dataAbouts'));
    }
}
