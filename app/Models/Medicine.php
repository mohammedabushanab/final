<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function suppliers()
    {
        return $this->belongsTo(Supplier::class, 'suplier_medicines', 'supplier_id', 'id', 'id');
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
