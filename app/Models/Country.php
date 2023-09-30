<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    //for has many through relation with user
    public function posts(){
        return $this->hasManyThrough('App\Models\Post','App\Models\User');
    }
}
