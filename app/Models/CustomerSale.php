<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSale extends Model
{
    use HasFactory;
    public function customer_sales(){
        return $this->hasMany(Customer::class , Category::class ,'customer_sales');
}
}
