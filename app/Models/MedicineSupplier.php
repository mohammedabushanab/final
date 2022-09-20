<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineSupplier extends Model
{
    use HasFactory;
    public function medicine_supplier()
    {
        return $this->hasMany(Medicine::class, Supplier::class, 'medicine_suppliers');
    }
}