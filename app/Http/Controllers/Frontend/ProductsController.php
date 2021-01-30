<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function listing($url){
    $categoryCount = Category::where(['url'=>$url,'status'=>1])->count();
    if($categoryCount>0){
      $categoryDetails = Category::catDetails($url);
      $categoryProducts = Product::with('brand')->whereIn('category_id', $categoryDetails['catIds'])->where('status', 1)->get()->toArray();
      $categoryProductsCount = Product::whereIn('category_id', $categoryDetails['catIds'])->where('status', 1)->count();
      return view('frontend.products.listing')->with(compact('categoryDetails', 'categoryProducts','categoryProductsCount'));
    } else {
        abort(404);
    }
    }
}
