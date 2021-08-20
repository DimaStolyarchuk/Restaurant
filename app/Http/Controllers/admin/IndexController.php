<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index_form()
    {
        $dataIndexs = [];
        return view('admin.index_form', compact('dataIndexs'));
    }
}
