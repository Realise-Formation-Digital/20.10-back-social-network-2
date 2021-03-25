<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        // données pouvant être récuperées
        'Comment',
    ];

    protected $hidden = [
        // données cachées
        'updated_at',
    ];
    public function users()

    { 
        return $this->hasMany(User::class); 
    }

    public function channels()
    { 
        return $this->hasMany(Channel::class); 
    }

    public function posts()
    { 
        return $this->hasMany(Post::class); 
    }

    

}
