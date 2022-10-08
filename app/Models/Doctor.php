<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Doctor extends Authenticatable
{
    use HasFactory, HasRoles;

    public function user()
    {
        return $this->morphOne(User::class, 'actor', 'actor_type', 'actor_id', 'id');
    }

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
    public function store()
    {
        return $this->hasMany(Store::class);
<<<<<<< HEAD
    }
}
=======
    }}
>>>>>>> 6d31cc8e4500e7947785da46f2a5a847db023af3
