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
    //for one to one polymorphic with video model
    public function video(){
        return $this->morphOne('App\Models\Video','videoable');
    }

    //for one to many polymorphic with news model
    public function news(){
        return $this->morphMany('App\Models\News','newsable');
    }
}
