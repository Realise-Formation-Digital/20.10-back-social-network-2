<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        // données pouvant être récuperées
        'compteur_like',
        
    ];

    protected $hidden = [
        // données cachées
        'created_at',
        'updated_at',
    ];

    public function users()
    { 
        return $this->hasMany(User::class); 
    }

    public function comments()
    { 
        return $this->hasMany(Comment::class); 
    }

    public function posts()
    { 
        return $this->hasMany(post::class); 
    }

    public function channels()
    { 
        return $this->hasMany(Channel::class); 
    }
}

