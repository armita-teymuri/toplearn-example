<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    // for one to many relationship with post table
    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
