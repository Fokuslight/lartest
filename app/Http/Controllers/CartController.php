<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function update(Product $product)
    {
        if (session('products.name') == null) {
            session()->put('products.name', []);
        }
        session()->push('products.name', $product);

        return redirect()->back();
    }
}
