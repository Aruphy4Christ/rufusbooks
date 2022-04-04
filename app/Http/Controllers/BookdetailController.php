<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Catehory;
use App\Models\Bookitem;

class BookdetailController extends Controller
{
    public function bookdetail(){


        $owners = Owner::all();
        $catehories = Catehory::all();
        $bookitem = Bookitem::all();
        $categories_with_book_count = Catehory::with('book_counts')->get();
        return view('books.index', [
            'owners'=>$owners,
            'catehories'=>$catehories,
            'bookitem'=>$bookitem,
            'categories_with_book_count'=>$categories_with_book_count

        ]);
        
        $newImageName = time() . '-' . $request->name . '.' .
        $request ->image ->extension();

        $request->image->move(public_path('images'), $newImageName);
        
    }


    public function view_author(){
        
        $owners = Owner::all();
        return view('admin.view_author', ['owners'=>$owners]);
    }
    public function single_book($id){
        $owners = Owner::all();
        $catehories = Catehory::all();
        
        
        // dd($catehories);
        $bookitem = Bookitem::with('categories')->where('id',$id)->first();
        $categories_with_book_count = Catehory::with('book_counts')->get();
        return view('books.single_book', [
            'owners'=>$owners,
            'catehories'=>$catehories,
            'bookitem'=>$bookitem,
            'categories_with_book_count'=>$categories_with_book_count
        ]);
    }

}
