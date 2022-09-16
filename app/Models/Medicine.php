<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}