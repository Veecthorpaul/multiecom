<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    public function index(){
// Get featured products
    $featuredProducts = Product::where('is_featured', 'Yes')->where('status', 1)->count();
    $pageName = "Index";
    return view('frontend.index')->with(compact('pageName'));
}


public function shop(){

    // Get latest products
    $latestProducts = Product::orderBy('id', 'Desc')->limit(3)->where('status', 1)->get()->toArray();   

    // Get featured products
    $featuredProductsCount = Product::where('is_featured', 'Yes')->where('status', 1)->count();
    $featuredProducts = Product::where('is_featured', 'Yes')->where('status', 1)->get()->toArray();
    // $featuredProductsChunk = array_chunk($featuredProducts, 4);
    $pageName = "Shop";
    return view('frontend.shop')->with(compact('pageName','featuredProducts','featuredProductsCount','latestProducts'));
}

}
