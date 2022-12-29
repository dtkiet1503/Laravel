<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
class MenuController extends Controller
{
    protected $menuService;
    public function __construct(MenuService $menuService,  ProductService $product)
    {
        $this->menuService = $menuService;
        $this->product = $product;
    }

    public function index(Request $request, $id, $slug = '')
    {
        $menu = $this->menuService->getId($id);
        $products = $this->menuService->getProduct($menu, $request);

        return view('menu', [
            'title' => $menu->name,

            'menu'  => $menu,
            'products' => $this->product->get()
        ]);
    }
}
