<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function images()
    {
        return $this->hasMany(Images::class, 'album_ID');
    }
}
