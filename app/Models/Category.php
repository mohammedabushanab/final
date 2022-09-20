<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function doctors(){
        return $this->belongsToMany(Doctor::class ,
    'doctor_categories' ,
    'doctor_id' ,
    'category_id',
    'id' ,
    'id'
     );
    }
    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
}