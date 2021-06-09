<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\supplier;
use App\Models\productType;
use App\Models\staff;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=product::all();
        return view ('admin.product.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $staffs=staff::all();
        $producttypes=productType::all();
        $suppliers=supplier::all();
        return view('admin.product.product-create',compact('staffs','producttypes','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $product=new product();
        $product->stock_keeper_unit=$request->sku;
        $product->id_product_type=$request->productType;
        $product->id_supplier=$request->supplier;
        $product->id_staff=$request->staff;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->stock=$request->stock;
        $product->status=$request->status;
        /* $product->image=$this->ImgUpload($request); */
        $product->id_promotion=$request->promotion;
        if ($request->hasfile('imageFile')) {
            $files=$request->file('imageFile');
            foreach ($files as $file) {
                $name = time().'-'.$file->getClientOriginalName();
                $file->move(public_path('Img/product-img'), $name);
                $product->image()->create(['image'=>$name,]);
                $product->image=$name;
            }
        }
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=product::findOrFail($id);
        $staffs=staff::all();
        $producttypes=productType::all();
        $suppliers=supplier::all();
        return view('admin.product.product-edit',compact('staffs','producttypes','suppliers','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product=product::findOrFail($id);
        $product->stock_keeper_unit=$request->sku;
        $product->id_product_type=$request->productType;
        $product->id_supplier=$request->supplier;
        $product->id_staff=$request->staff;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->stock=$request->stock;
        $product->status=$request->status;
        if($request->image!=null)
        {
            $product->image=$this->ImgUpload($request);
        }
        else
        {
            $product->image=$product->image;
        }
        $product->id_promotion=$request->promotion;

        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product=product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }

    public function ImgUpload(Request $request)
    {
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $request->validate(
                [
                    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName=time().'.'.$request->image->extension();
                $request->image->move(public_path('Img/product-img'),$imageName);
                return $imageName;
            }

        }

    }
}
