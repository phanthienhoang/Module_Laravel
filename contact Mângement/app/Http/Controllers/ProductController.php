<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\db;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Product::all();
         
        return view("Product.index" ,compact('products'));
    }

    public function create()
    {
        return view("Product.create");
    }

    public function add()
    {   
        $attribute = request()->all();
        //dd($attribute);
        $product = Product::create($attribute);
        return redirect("/product");
    }
    public function edit(Product $product)
    {
        return view("Product.show", compact('product'));
    }

    public function update(Product $product)
    {
        $attribute = request()->all();
        $product->update($attribute);
        return redirect("/product");
    }

    public function delete($id)
    {
        db::table('products')->where('id',$id)->delete();
        return redirect("/product");
    }
}
