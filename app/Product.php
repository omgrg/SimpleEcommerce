<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','description','price','image','availability','category_id'];

    public function category(){
        return $this->belongsToMany('App\Category','category_product')->withTimestamps();
    }
}
