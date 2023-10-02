<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
    use HasFactory;
    //for many to many polymorphic with post and product model

    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'categoryable');
    }
 
    /**
     * Get all of the videos that are assigned this tag.
     */
    public function products(): MorphToMany
    {
        return $this->morphedByMany(Product::class, 'categoryable');
    }
}
