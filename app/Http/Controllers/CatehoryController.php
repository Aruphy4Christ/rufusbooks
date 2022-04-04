<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catehory;

class CatehoryController extends Controller
{
    public function category (){

        $categories = Catehory::all();
        return view('admin.category', ['catehories' => $categories]);

    } 
    public function list_category(){
        $categories = Catehory::all();
        $categories_page = Bookitem::where('catehory_id', $catehory->id)->get();
        
        return view('books.list_category', [
            'catehories' => $categories,
            'categories_page'=>$categories_page
            
        ]);
    }


    public function view_category(){
        $catehories = Catehory::all();
        return view('admin.view_category', ['catehories'=>$catehories]);
    }

    public function edit_cart($id)  
    {
       $catehory = Catehory::find($id)->first();
       
   
       return view('admin.edit_cart')->with('catehory', $catehory);
    }
    
    public function store(Request $request){
    $catehory = Catehory::create([

        'name'=>$request->input('name'),
        'description'=>$request->input('description')
    ]);     
    
    return redirect('/category')->with('success', 'Author successfully created');
}



public function update(Request $request, $id){
    
    $catehory = Catehory::where('id', $id);
    

    $catehory->update([
        'name'=>$request->input('name'),
        'description'=>$request->input('description'),

        ]);
        return redirect('/'.$id.'/edit_category');

}

public function destroy(Catehory $catehory){
 
    

    $catehory->delete();
    
    
    return redirect('/view_category')->with('success', 'One record Deleted');
 
}   
}
