<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery_photo extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
    ];
}
