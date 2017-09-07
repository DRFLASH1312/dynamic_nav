<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $shirts=Product::all();

          $categories=Category::all()->groupBy('parent_id');

        $categories['root']=$categories[0];
        unset($categories[0]);

        return view('front.home',compact('shirts','categories'));
    }

    public function shirts()
    {
        $shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

    public function shirt()
    {
        return view('front.shirt');
    }
}
