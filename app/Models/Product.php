<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');

        //if we have other field in pivot table
        // return $this->belongsToMany('App\Models\Tag')->withPivot('value');
    }
}
