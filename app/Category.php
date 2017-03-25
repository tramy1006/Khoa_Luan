<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    //protected $table = "categories";
    public function lessons()
    {
    	return $this->hasMany('App\Lesson','cate_id', 'id');
    }
    
}
