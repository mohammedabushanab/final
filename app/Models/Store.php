<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function doctors(){
        return $this->hasMany(Doctor::class);
    }
}