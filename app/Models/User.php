<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        // données pouvant être récuperées 

        'name',
        'email',
        'created_at',
    ];

    protected $hidden = [
        // données cachées

        'id_users',
        'password',
        'updated_at',
    ];

    public function channels()
    { 
        return $this->hasMany(Channel::class); 
    }

    public function posts()
    { 
        return $this->hasMany(Post::class); 
    }

    public function likes()
    { 
        return $this->hasMany(Like::class); 
    }

    public function feedbacks()
    { 
        return $this->hasMany(Feedback::class); 
    }

    public function comments()
    { 
        return $this->hasMany(Comment::class); 
    }
}
