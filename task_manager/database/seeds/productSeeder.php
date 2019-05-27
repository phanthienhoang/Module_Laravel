<?php

use Illuminate\Database\Seeder;
use App\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->productName ='nokia';
        $product->productLine ='1280';
        $product->productVendor ='HMD Global ';
        $product->description ='nhỏ gọn dễ sài';
        $product->price ='120000';

        $product->save();

        $product = new Product();
        $product->productName ='iphone';
        $product->productLine ='i10';
        $product->productVendor ='apple';
        $product->description ='nhỏ gọn dễ sài';
        $product->price ='21000';
        
        $product->save();

        $product = new Product();
        $product->productName ='nok223ia';
        $product->productLine ='aaa';
        $product->productVendor ='HMD Global ';
        $product->description ='nhỏ gọn dễ sài';
        $product->price ='120000';
        
        $product->save();

        $product = new Product();
        $product->productName ="sdđsd";
        $product->productLine ='1280';
        $product->productVendor ='HMD Global ';
        $product->description ='nhỏ gọn dễ sài';
        $product->price ='120000';
        
        $product->save();
    }
}
