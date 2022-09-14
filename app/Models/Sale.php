<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public function customers(){
        return $this->belongsToMany(Customer::class ,
        'customer_sales' ,
        'customer_id' ,
        'sale_id',
        'id' ,
        'id'
    );
}
}
