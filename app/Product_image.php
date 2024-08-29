<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    function product()
    {
        $this->belongsTo('App\product');
    }
}
