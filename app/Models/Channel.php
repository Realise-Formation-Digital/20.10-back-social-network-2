<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = [
        // données pouvant être récuperées 

        'avatar_src',
        'title',
        'description',
        'compteur_like',
        'category_channel',
        'created_at',
    ];

    protected $hidden = [
        
        // données cachées

        'updated_at',
    ];

    public function user()
    { 
        return $this->belongsTo(User::class); 
    }

    public function comments()
    { 
        return $this->hasMany(Comment::class); 
    }

    public function likes()
    { 
        return $this->hasMany(Like::class); 
    }
    public function posts()
    { 
        return $this->hasMany(Post::class); 
    }
}
