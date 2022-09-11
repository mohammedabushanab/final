<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_categories extends Model
{
    use HasFactory;
    public function Doctor_categories(){
        return $this->hasMany(Author::class , Category::class , 'doctor_categories');
    }
}