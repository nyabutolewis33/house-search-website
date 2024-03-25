<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class UserDetail extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'user_details';

    protected $fillable = [
        'name',
        'email',
        'national_id_number',
        'password',
    ];

    // You can define relationships with other models here if needed
    
}
