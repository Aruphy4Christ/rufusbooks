<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    
        return view('admin.index');
    }

    public function author(){
        return view('admin.author');
    }

    public function category (){
        return view('admin.category');
    }

    public function book(){
        return view('admin.book');
    }

   
    
}
