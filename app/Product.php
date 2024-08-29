<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function product_images()
    {
        return $this->hasMany('App\Product_image');
    }
}
