<?php

namespace App\Http\Controllers;

use App\Models\product;

class SearchController extends Controller
{
    public function search()
    {
        $products = product::where('name', 'like', '%' .request('keyword') . '%')->get();
        return view('shop.search.search', compact('products'));
    }
}
