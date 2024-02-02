<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_ID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
    public function likeimages()
    {
        return $this->belongsTo(LikeImages::class, 'likeID');
    }
    public function likes()
    {
        return $this->hasMany(LikeImages::class, 'imageID');
    }
    public function komentarimages()
    {
        return $this->belongsTo(KomentarImages::class, 'komentarID');
    }
}
