<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productDetailController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('checkLogin');
    }

    public function index(){
        return view('admin.product.productDetail');
    }

    public function productDetailCreate(){
        return view('admin.product.productDetail');
    }
}
