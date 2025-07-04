<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'user_id',
        'author_bio',
        'username',
        'author_website',
        'author_facebook',
        'author_instagram',
        'author_linkedin',
        'author_youtube',
        'author_x',
        'author_telegram',
        'author_whatsapp',
        'author_discord',
        'author_other'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
