<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookitem extends Model
{
    use HasFactory;

public $table = 'bookitems';

public $primaryKey = 'id';

public $timestamps = true; 

public $fillable = ['name', 'description','image_path','owner_id'];

// The bookitem belongs to an owner

public function owner(){

    return $this-> belongsTo(Owner::class);
    
}


public function bookitem(){

    return $this->belongsToMany(Bookitem::class);
}

public function categories(){

    return $this->belongsToMany(Catehory::class);
}

}
