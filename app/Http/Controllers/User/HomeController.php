<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\User\ShareController;

class HomeController extends ShareController
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $list=[];
        $ids =[];
        $category = Category::limit(3)->get();
        foreach ($category as $key => $categories) {
            $ids = [$categories->id];
            $list[$key]['category'] = $categories;
            $list[$key]['product'] = Product::where('category_id',$ids)->get();
        }
        return view('users.index',['list'=>$list]); 
    }
    function introduce()
    {
        return view('users.introduce');
    }
    function contact()
    {
        return view('users.contact');
    }
    function news()
    {
        return view('users.news');
    }
}
