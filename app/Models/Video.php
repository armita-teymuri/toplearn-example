<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    //for one to one polymorphic with post and product model
    public function videoable(){
        return $this->morphTo();
    }
}
