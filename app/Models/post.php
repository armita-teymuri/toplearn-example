<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // for one to many relationship with image
    public function images(){
        return $this->hasMany('App\Models\Image');
    }
    // for one to many relationship with post
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
