<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        // données pouvant être récuperées
        'title',
        'icon',
        'content',
        'category_post',
        'created_at',
    ];

    protected $hidden = [
        // données cachées
        'updated_at',
    ];

    // function  

    public function users()
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

    public function channels()
    { 
        return $this->hasMany(Channel::class); 
    }
}

