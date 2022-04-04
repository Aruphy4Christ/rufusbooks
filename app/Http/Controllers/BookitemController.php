<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookitem;
use App\Models\Owner;
use App\Models\Catehory;

class BookitemController extends Controller
{
    public function book(){

        $bookitems = Bookitem::all();
        $owners = Owner::all();
        $catehories = Catehory::all();
        return view('admin.book', [
            'bookitems' => $bookitems,
            'owners' => $owners,
            'catehories' => $catehories
            
        ]);  

        
    } 

    
 
    


    public function store(Request $request){
        // VAALIDATING CONDITIONS
        $request->validate([
            'image' =>'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        // dd($request->all());
        $newImageName = time() . '-' . $request->name . '.' .
        $request ->image ->extension();
        $request->image->move(public_path('images'), $newImageName);
        
            $bookitem =Bookitem::create([
                'name'=>$request->input('name'),
                'owner_id'=>$request->input('author_id'),
                'description'=>$request->input('description'),
                'image_path'=>  $newImageName
            ]);     
            $bookitem->categories()->sync($request->category_id);
            return redirect('/book')->with('success', 'Upload Successful');

    }
    public function view_book(){
        
        $bookitem = Bookitem::all();
        return view('admin.view_book', ['bookitem'=>$bookitem]);
    }


    public function edit_book($id)  
 {
    $bookitem = Bookitem::find($id);
    $owners = Owner::all();
    return view('admin.edit_book', compact('bookitem', 'owners'));
 }
    

public function update(Request $request, $id){
    
    $bookitem = Bookitem::where('id', $id);
    $newImageName = $bookitem->first()->image_path; 
    if ($request->hasFile('image')) {
        $newImageName = time() . '-' . $request->name . '.' .
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
    }

    $bookitem->update([
        'name'=>$request->input('name'),
        
        'description'=>$request->input('description'),
        'image_path'=> $newImageName


        ]);
        return redirect('/'.$id.'/edit_book')->with('success', 'Record updated successfully');

}

public function destroy(Bookitem $bookitem){
 

    $bookitem->delete();
    
 
    return redirect('/view_book')->with('success', 'One record deleted');
 
} 

}
