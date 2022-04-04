<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;


public $table = 'owners';

public $primaryKey = 'id';

public $timestamps = true; 

public $fillable = ['name', 'biography', 'email', 'phone', 'image_path', 'gender', 'status', 'description'];

public function ownermodels(){

    return $this->hasMany(OwnerModel::class);
}

}