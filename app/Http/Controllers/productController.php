<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productDetail;
use App\Models\supplier;
use App\Models\productType;
use App\Models\staff;
use App\Models\promotion;
use GuzzleHttp\Middleware;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('checkLogin');
    }
    public function index()
    {
        //
        $data=product::paginate(4);
        return view ('admin.product.product',['products'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $promotions=promotion::all();
        $staffs=staff::all();
        $producttypes=productType::all();
        $suppliers=supplier::all();
        return view('admin.product.product-create',compact('staffs','producttypes','suppliers','promotions'));
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
        if($request->status!=null)
        $product->status=$request->status;
        else
        $product->status=0;
        $product->image=$this->ImgUpload($request);
        $product->promotion_price=$product->price-($product->price*$product->promotionRelation->rate/100);
        $product->save();
        $productDetail=new productDetail();
        $productDetail->product_id=$product->id;
        $productDetail->description=$request->description;
        $productDetail->size=$request->size;
        $productDetail->origin=$request->origin;
        $productDetail->weight=$request->weight;
        $productDetail->age=$request->age;
        /* dd($productDetail); */
        $productDetail->save();
        if ($request->hasfile('imageFile')) {
            $files=$request->file('imageFile');
            foreach ($files as $file) {
                $name = time().'-'.$file->getClientOriginalName();
                $file->move(public_path('Img/product-img'), $name);
                $product->image()->create(['image'=>$name,'product_id'=>$product->id]);
            }
        }
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
        $promotions=promotion::all();
        $product=product::findOrFail($id);
        $productDetail=productDetail::where('product_id',$id)->first();
        $staffs=staff::all();
        $producttypes=productType::all();
        $suppliers=supplier::all();
        return view('admin.product.product-edit',compact('staffs','producttypes','suppliers','product','productDetail','promotions'));
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
        $productDetail=productDetail::where('product_id',$id)->first();
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
        $product->promotion_price=$product->price-($product->price*$product->promotionRelation->rate/100);
        $productDetail->product_id=$product->id;
        $productDetail->description=$request->description;
        $productDetail->size=$request->size;
        $productDetail->origin=$request->origin;
        $productDetail->weight=$request->weight;
        $productDetail->age=$request->age;
        /* dd($product); */
        $productDetail->save();
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
    public function ImgSingle(Request $request){
                $imageName=time().'.'.$request->imageFile[0]->extension();
                $request->imageFile[0]->move(public_path('Img/product-img'),$imageName);
                return $imageName;
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

    public function productDetail(){
        $productDetails=productDetail::all();
        return view('admin.product.productDetail',compact('productDetails'));
    }

    public function productDetailCreate(){
        $products=product::all();
        return view('admin.product.productDetail-create',compact('products'));
    }
    public function productDetailStore(Request $request){
        $productDetail=new productDetail();
        $productDetail->product_id=$request->product;
        $productDetail->description=$request->description;
        $productDetail->size=$request->size;
        $productDetail->origin=$request->origin;
        $productDetail->weight=$request->weight;
        $productDetail->age=$request->age;
        /* dd($productDetail); */
        $productDetail->save();
        /* return view('admin.product.productDetail-create',compact('products')); */
    }
}
