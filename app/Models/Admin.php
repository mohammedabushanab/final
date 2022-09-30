<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    public function user(){
        return $this->morphOne(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');

    }

    public function getImagesAttribute()
    {
        return $this->user->image;
    }


    public function abouts(){
        return $this->hasMany(About::class);
    }
}