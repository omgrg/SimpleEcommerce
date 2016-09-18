<?php

namespace App;

use Baum\Node;

class Category extends Node
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function products() {
        return $this->belongsToMany('App\Product', "category_product")->withTimestamps();
    }
}
