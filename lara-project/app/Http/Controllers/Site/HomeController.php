<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        /* $mobiles = Product::select('id', 'name', 'price', 'image', 'quantity')
            ->where('category_id', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        $watches = Product::select('id', 'name', 'price', 'image', 'quantity')
            ->where('category_id', 2)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        $cameras = Product::select('id', 'name', 'price', 'image', 'quantity')
            ->where('category_id', 3)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        $accessories = Product::select('id', 'name', 'price', 'image', 'quantity')
            ->where('category_id', 4)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get(); */

        // $mobiles = Product::particularCategory(1)->get();
        // $watches = Product::particularCategory(2)->get();
        // $cameras = Product::particularCategory(3)->get();
        // $accessories = Product::particularCategory(4)->get();

        $mobiles = $this->latestProduct(1);
        $watches = $this->latestProduct(2);
        $cameras = $this->latestProduct(3);
        $accessories = $this->latestProduct(4);

        return view('site.pages.home', compact('mobiles', 'watches', 'cameras', 'accessories'));
    }

    public function latestProduct($_category_id)
    {
        return Product::select('id', 'name', 'price', 'image', 'quantity')
            ->where('category_id', $_category_id)
            ->where('active', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
    }

    public function details($id)
    {
        $product = Product::with('category', 'brand')->findOrFail($id);

        return view('site.pages.product-details', compact('product'));
    }
    public function cart()
    {
        return view('site.pages.cart');
    }
}
