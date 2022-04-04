<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catehory extends Model
{
    use HasFactory;

public $table = 'catehories';

public $primaryKey = 'id';

public $timestamps = true; 

public $fillable = ['name', 'description'];


public function book_counts(){
    
    return $this->belongsToMany(Bookitem::class);
}

}
    