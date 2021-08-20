<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function about()
    {
        return view('admin.about');
    }

    public function contact()
    {
        return view('admin.contact');
    }

    public function recipe()
    {
        return view('admin.recipe');
    }

    public function blog()
    {
        return view('admin.blog');
    }
}

