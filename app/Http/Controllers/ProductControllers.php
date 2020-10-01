<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductControllers extends Controller
{

    
    public function index(){
        if (request()->categorie) {
            $products =  Product::with('categories')->whereHas('categories',function($query){
               $query->where('slug',\request()->categorie);
            })->paginate(6);
          }else{
            $products = Product::with('categories')->paginate(6);
          }

        
        return view('Products.index')->with('products',$products);
    }

    public function show($slug){
        $product = Product::where('slug', $slug)->firstorfail();

        return view('Products.show')->with('product', $product);
    }
}
