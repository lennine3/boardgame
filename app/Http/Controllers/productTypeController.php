<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productType;
use GuzzleHttp\Middleware;

class productTypeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('checkLogin');
    }
    public function index(){
        $productTypes=productType::all();
        return view('admin.product.productType',compact('productTypes'));
    }

    public function edit($id){
        $ProductTypeSingle=productType::findOrFail($id);
        $productTypes=productType::all();
        return view('admin.product.productType',compact('productTypes','ProductTypeSingle'));
    }

    public function store(Request $request){

        $productTypes= new productType();
        $productTypes->product_type_name=$request->product_type_name;
        $productTypes->save();
        return redirect()->route('productType-index');
    }
    public function update(Request $request,$id){
        $productType= productType::findOrFail($id);
        $productType->product_type_name=$request->product_type_name;
        $productType->save();
        return redirect()->route('productType-index');
    }

    public function destroy($id){
        $productType= productType::findOrFail($id);
        $productType->delete();
        return redirect()->route('productType-index');
    }
}
