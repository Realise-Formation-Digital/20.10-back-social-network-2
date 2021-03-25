<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        // données pouvant être récuperées
        'feedback',
        'created_at',
    ];

    protected $hidden = [
        // données cachées
        'updated_at',
    ];

    public function users()
    { 
        return $this->hasMany(User::class); 
    }
}

