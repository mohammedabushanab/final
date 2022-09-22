<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function user(){
        return $this->morphOne(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');

    }

    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
    public function store(){
        return $this->hasMany(Store::class);
    }


}