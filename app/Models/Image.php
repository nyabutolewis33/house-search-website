<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'description', 'thumbnail', 'path'];

    public function getTable()
    {
        return 'images';
    }
    
    protected $casts = [
        'path'=> 'array',
    ];

    
}
