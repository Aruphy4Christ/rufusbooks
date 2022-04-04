<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

// use App\Http\Requests\CreateValidationRequest;
use App\Rules\Uppercase;


class OwnersController extends Controller
{

    public function index()
    {
    
        return view('admin.index');
     
    }

    //SELECT * FROM Owners
    public function author(){

    $owners = Owner::all();
    return view('admin.author', ['owners'=>$owners]);

    }
   

    public function store(Request $request){
          
        
        // STORING IMAGE
        $newImageName = time() . '-' . $request->name . '.' .
        $request ->image ->extension();

        $request->image->move(public_path('images'), $newImageName);

        // VALIDATION CONDITIONS
        $request->validate([ 
        'name' => new Uppercase,
        'biography'=>'required',
        'gender'=> 'required',
        'phone'=> 'required',
        'email'=> 'required',
    
        ]);


        // FIELDS RECEVING INPUTS FROM THE UI
        $owner = Owner::create([
        'name'=>$request->input('name'),
        'biography'=>$request->input('biography'),
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
       
        'gender'=>$request->input('gender'),
        'status'=>'active',
        'description'=>$request->input('description'),
        'image_path'=> $newImageName

        ]);
        return redirect('/author')->with('success', 'Author successfully created');
    

        
    }
    
public function edit($id)  
 {
    $owner = Owner::find($id);

    return view('admin.edit')->with('owner', $owner);
 }
    

public function update(Request $request, $id){
    
    $owner = Owner::where('id', $id);
    $newImageName = $owner->first()->image_path;
    if ($request->hasFile('image')) {
        $newImageName = time() . '-' . $request->name . '.' .
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
    }

    $owner->update([
        'name'=>$request->input('name'),
        'biography'=>$request->input('biography'),
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
       
        'gender'=>$request->input('gender'),
        'status'=>'active',
        'description'=>$request->input('description'),
        'image_path'=> $newImageName


        ]);
        return redirect('/'.$id.'/edit');

}

public function destroy(Owner $owner){
 

    $owner->delete();
    
 
    return redirect('/view_author')->with('success', 'One record deleted');
 
} 

 } 


