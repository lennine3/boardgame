<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class shopController extends Controller
{
    //
    public function index(){
        $products=product::all();
        return view ('index',compact('products'));
    }
    public function loginPage(){
        return view('shop.login-page');
    }
}

