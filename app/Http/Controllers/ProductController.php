<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products, $product;
    public function showProducts(){
        $this->products = Product::allProducts();
        return view('product.products', [
            'products' => $this->products,
        ]);
    }
    public function detailProducts($id){
        $this->products = Product::allProducts();
        foreach ($this->products as $product){
            if ($product['id'] == $id){
                $this->product = $product;
            }
        }
        return view('product.product-detail',[
            'product' => $this->product,
        ]);
    }
}
