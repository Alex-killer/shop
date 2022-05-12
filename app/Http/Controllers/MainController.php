<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function categories()
    {
        $categories = Category::all();
        return view('blog.categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('blog.category', compact('category'));
    }

    public function product($product)
    {
        return view('blog.product', compact('product'));
    }

    public function basket()
    {
        return view('blog.basket');
    }

    public function basketPlace()
    {
        return view('blog.order');
    }
}
