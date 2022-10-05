<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Permission\Traits\HasRoles;

class Customer extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->morphOne(User::class, 'actor', 'actor_type', 'actor_id', 'id');
    }
    public function sales()
    {
        return $this->belongsToMany(
            Sale::class,
            'customer_sales',
            'customer_id',
            'sale_id',
            'id',
            'id'
        );
    }
}
