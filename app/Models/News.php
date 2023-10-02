<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
     //for one to many polymorphic with post and product model
    public function newsable(){
        return $this->morphTo();
    }
}
