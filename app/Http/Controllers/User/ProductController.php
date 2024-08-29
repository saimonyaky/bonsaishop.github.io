<?php

namespace App\Http\Controllers\User;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\User\ShareController;
use Session;

class ProductController extends ShareController
{
    public function __construct()
    {
        parent::__construct();
    }
    function category($slug)
    {
        $list=[];
        $category = $this->category;
        foreach ($category as $key => $categories) {
            if($slug == $categories->slug) {
                $ids = $categories->id;
                $list[$key]['category'] = $categories;
                $list[$key]['product'] = Product::where('category_id',$ids)->get();
            }           
        }
        return view('users.product',['list'=>$list]); 
    }
    function product()
    {
        $list=[];
        $ids =[];
        $category = $this->category;
        foreach ($category as $key => $categories) {
            $ids = [$categories->id];
            $list[$key]['category'] = $categories;
            $list[$key]['product'] = Product::where('category_id',$ids)->limit(4)->get();
        }
        return view('users.product',['list'=>$list]); 
    }
    function product_detail($slug)
    {
        $data = Product::with('product_images')->where('slug',$slug)->first();
        $product = Product::where('category_id',$data->category_id)->get();
        return view('users.product_detail',compact('data','product'));
    }
}
