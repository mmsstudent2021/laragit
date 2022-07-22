<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongTo(User::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function photos(){
        return $this->hasManyThrough(Photo::class)->through(Post::class);
    }
}
