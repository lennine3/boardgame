<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\product;
use App\Models\productImage;
use App\Models\productDetail;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;
use App\Models\staff;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Models\comment;
use App\Models\hasRole;

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
    public function registerPage(){
        return view('shop.register-page');
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
        $comments=comment::where('id_product',$id)->get();
        $product_images=productImage::where('product_id',$id)->get();
        /* dd($product_images); */
        $productDetail=productDetail::where('product_id',$id)->first();
        $product=product::find($id);
        return view('shop.single',compact('product','product_images','productDetail','comments'));
    }

    public function profile(){
        $staff=staff::where('user',Auth()->user()->id)->first();
        $customer=customer::where('user',Auth()->user()->id)->first();
        return view('shop.profile-user.profile',compact('customer','staff'));
    }
    public function profile_ajax(){
        $staff=staff::where('user',Auth()->user()->id)->first();
        $customer=customer::where('user',Auth()->user()->id)->first();
        return view('shop.profile-user.profile-ajax',compact('customer','staff'));
    }
    public function user_update(Request $request){
        $user=User::find(Auth()->user()->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        $customer=customer::where('user',Auth()->user()->id)->first();
        $customer->phone=$request->phone;
        $customer->birth=$request->birth;
        $customer->sex=$request->gender;
        if($request->image!=null)
        $customer->avatar=$this->ImgUpload($request);
        else
        $customer->avatar=$customer->avatar;
        $customer->address=$request->address;
        $customer->save();
        return back();
    }
    public function staff_update(Request $request)
    {
        $user=User::find(Auth()->user()->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        $staff=staff::where('user',Auth()->user()->id)->first();
        $staff->phone=$request->phone;
        $staff->birth=$request->birth;
        $staff->sex=$request->gender;
        if($request->image!=null)
        $staff->avatar=$this->ImgUpload($request);
        else
        $staff->avatar=$staff->avatar;
        $staff->address=$request->address;
        $staff->save();
        return back();
    }
    public function invoice(){
        $staff=staff::where('user',Auth()->user()->id)->first();
        $customer=customer::where('user',Auth()->user()->id)->first();
        return view('shop.invoice.invoice',compact('customer','staff'));
    }
    public function invoice_ajax(){
        $customer=customer::where('user',Auth()->user()->id)->first();
        $staff=staff::where('user',Auth()->user()->id)->first();
        return view('shop.invoice.invoice-ajax',compact('customer','staff'));
    }
    public function address(){
        $customer=customer::where('user',Auth()->user()->id)->first();
        return view('shop.address.address',compact('customer'));
    }
    public function comment_store(Request $request,$id){
        $comments=comment::where('id_product',$id)->get();
        $comment=new comment();
        $hasRole=hasRole::where('model_id',Auth()->user()->id)->first();
        $comment->comment=$request->comment;
        $comment->id_product=$id;
        $comment->id_user=Auth()->user()->id;
        $comment->role_user=$hasRole->role_id;
        $comment->save();
        return $this->comment_page($id);
    }

    public function comment_page($id){
        $comments=comment::where('id_product',$id)->get();
        return view('shop.comment.comment',compact('comments'));

    }


    public function ImgUpload(Request $request)
    {
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $request->validate(
                [
                    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]);
                $imageName=time().'.'.$request->image->extension();
                $request->image->move(public_path('Img/customer-avatar'),$imageName);
                return $imageName;
            }
            return '';
        }

    }
}

