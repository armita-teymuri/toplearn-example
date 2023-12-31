<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Product extends Model
{
    use HasFactory;
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');

        //if we have other field in pivot table
        // return $this->belongsToMany('App\Models\Tag')->withPivot('value');
    }
    //for one to one polymorphic with video model
     public function video(){
        return $this->morphOne('App\Models\Video','videoable');
    }

    //for one to many polymorphic with news model
    public function news(){
        return $this->morphMany('App\Models\News','newsable');
    }

    //for many to many polymorphic with category model
    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }
}
