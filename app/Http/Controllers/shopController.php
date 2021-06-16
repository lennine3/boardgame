<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\productImage;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class shopController extends Controller
{
    //
    public function index(){
        $products=product::all();
        $productType_1=product::where('id_product_type',1)->get();
        $productType_2=product::where('id_product_type',2)->get();
        $productType_3=product::where('id_product_type',3)->get();
        $productType_4=product::where('id_product_type',4)->get();
        return view ('index',compact('products','productType_1','productType_2','productType_3','productType_4'));
    }
    public function loginPage(){
        return view('shop.login-page');
    }
    public function category(){
        $products=product::all();
        $productType_1=product::where('id_product_type',1)->get();
        $productType_2=product::where('id_product_type',2)->get();
        $productType_3=product::where('id_product_type',3)->get();
        $productType_4=product::where('id_product_type',4)->get();
        return view ('shop.category',compact('products','productType_1','productType_2','productType_3','productType_4'));
    }

    public function single($id){
        $product_images=productImage::where('product_id',$id)->get();
        /* dd($product_images); */
        $product=product::find($id);
        return view('shop.single',compact('product','product_images'));
    }
}

