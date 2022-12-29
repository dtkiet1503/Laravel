<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService,ProductService $product)
    {
        $this->productService = $productService;
        $this->product = $product;

    }
    public function index($id = '', $slug = '')
    {
        $product = $this->productService->show($id);
        $productsMore = $this->productService->more($id);

        return view('products.content',[
            'title'=>$product->name,
            'product' =>$product,
            'products'=> $productsMore
        ]);
    }
}
