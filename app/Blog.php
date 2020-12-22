<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','featured','slug','posts'];

    public function getFeaturedAttibute($featured){
    	return asset($featured);
    }
}
