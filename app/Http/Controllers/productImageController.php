<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\productImage;
use Illuminate\Http\Request;

class productImageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('checkLogin');
    }
    public function index(){
        $products=product::all();
        $productImages=productImage::paginate(8);
        return view('admin.product.productImage',compact('products','productImages'));
    }
    public function store(Request $request){
        //validate the files
        if ($request->hasfile('imageFile')) {
            $files=$request->file('imageFile');
            foreach ($files as $file) {

                $name = time().'-'.$file->getClientOriginalName();
                $file->move(public_path('Img/test'), $name);
                productImage::create([
                    'id_product'=>$request->idProduct,
                    'image'=>$name,
                    ]);
            }
            return redirect()->route('product-img');
        }
    }

    public function ImgUpload(Request $request)
    {
        if ($image = $request->file('image')) {
            foreach ($image as $files) {
           // $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
         //   $files->move($destinationPath, $profileImage);
            $insert[]['image'] = "$profileImage";
            }
        }
        $check = productImage::insert($insert);

    }
}
