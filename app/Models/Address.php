<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Address extends Model
{
    use HasFactory;
    //for one to one relationship with address table
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
