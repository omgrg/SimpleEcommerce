<?php

namespace App;

use Baum\Node;

class Category extends Node
{
    protected $table = 'categories';

    public function products() {
        return $this->belongsToMany('App\Product', "category_product")->withTimestamps();
    }
}
