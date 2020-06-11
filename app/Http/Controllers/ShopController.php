<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Tag;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $tags = Tag::get();
        $products = Product::paginate(15);
        return view('shop.index', compact('products', 'tags', 'categories'));
    }

    public function category(Category $category)
    {
        $categories = Category::get();
        $tags = Tag::get();
        $products = $category->products()->paginate(15);
        return view('shop.index', compact('products', 'tags', 'categories'));
    }

    public function tag(Category $category)
    {
        $categories = Category::get();
        $tags = Tag::get();
        $products = $category->products;
        return view('shop.index', compact('products', 'tags', 'categories'));
    }

    public function show(Category $category, Product $product)
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('shop.show', compact('product', 'category', 'categories', 'tags'));
    }
}
