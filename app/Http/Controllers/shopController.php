<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\staff;
use App\Models\rating;
use App\Models\comment;
use App\Models\hasRole;
use App\Models\invoice;
use App\Models\product;
use App\Models\customer;
use App\Models\promotion;
use App\Models\turtorial;
use App\Models\productType;
use Illuminate\Support\Str;
use App\Models\productImage;
use Illuminate\Http\Request;
use App\Models\invoiceDetail;
use App\Models\productDetail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\HttpFoundation\Session\Session;

class shopController extends Controller
{
    public function index()
    {
        $products=product::all();
        $productType_1=product::where('id_product_type', 1)->get();
        $productType_2=product::where('id_product_type', 2)->get();
        $productType_3=product::where('id_product_type', 3)->get();
        $productType_4=product::where('id_product_type', 4)->get();
        $promotion=promotion::all();
        $deals=product::all();
        return view('index', compact('products', 'productType_1', 'productType_2', 'productType_3', 'productType_4', 'deals'));
    }
    public function loginPage()
    {
        return view('shop.login-page');
    }
    public function registerPage()
    {
        return view('shop.register-page');
    }
    public function category($type)
    {
        if ($type==1) {
            $products=product::orderBy('price', 'asc')->paginate(12);
        } elseif ($type==2) {
            $products=product::orderBy('price', 'desc')->paginate(12);
        } else {
            $products=product::orderBy('created_at')->paginate(12);
        }
        $productType_1=product::where('id_product_type', 1)->get();
        $productType_2=product::where('id_product_type', 2)->get();
        $productType_3=product::where('id_product_type', 3)->get();
        $productType_4=product::where('id_product_type', 4)->get();
        $productTypes=productType::all();
        return view('shop.category', ['products'=>$products], compact('productTypes'));
    }
    public function category_type($id, $type)
    {
        if ($type==1) {
            $products=product::where('id_product_type', $id)->orderBy('price', 'asc')->paginate(12);
        } elseif ($type==2) {
            $products=product::where('id_product_type', $id)->orderBy('price', 'desc')->paginate(12);
        } else {
            $products=product::where('id_product_type', $id)->orderBy('created_at')->paginate(12);
        }
        $productTypes=productType::all();
        return view('shop.category.category-Type', ['products'=>$products], compact('productTypes', 'id'));
    }
    public function category_render($number)
    {
        $products=product::where('price', '<', $number)->orderBy('price')->get();
        return view('shop.category.category-render', compact('products'));
    }
    public function categoryPrice_render($price_1, $price_2)
    {
        $products=product::whereBetween('price', [$price_1,$price_2])->orderBy('price')->get();
        return view('shop.category.category-render', compact('products'));
    }
    public function single($id)
    {
        $rate=rating::where('id_product', $id)->get();
        $comments=comment::where('id_product', $id)->get();
        $product_images=productImage::where('product_id', $id)->get();
        /* dd($product_images); */
        $turtorial=turtorial::where('id_product', $id)->first();
        $productDetail=productDetail::where('product_id', $id)->first();
        $product=product::find($id);
        $relateds=product::where('id_product_type', $product->id_product_type)->get();
        $deals=product::all();
        return view('shop.single', compact('product', 'product_images', 'productDetail', 'comments', 'rate', 'relateds', 'deals', 'turtorial'));
    }

    public function profile()
    {
        $staff=staff::where('user', Auth()->user()->id)->first();
        $customer=customer::where('user', Auth()->user()->id)->first();
        return view('shop.profile-user.profile', compact('customer', 'staff'));
    }
    public function profile_ajax()
    {
        $staff=staff::where('user', Auth()->user()->id)->first();
        $customer=customer::where('user', Auth()->user()->id)->first();
        return view('shop.profile-user.profile-ajax', compact('customer', 'staff'));
    }
    public function user_update(Request $request)
    {
        $user=User::find(Auth()->user()->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        $customer=customer::where('user', Auth()->user()->id)->first();
        $customer->phone=$request->phone;
        $customer->birth=$request->birth;
        $customer->sex=$request->gender;
        if ($request->image!=null) {
            $customer->avatar=$this->ImgUpload($request);
        } else {
            $customer->avatar=$customer->avatar;
        }
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
        $staff=staff::where('user', Auth()->user()->id)->first();
        $staff->phone=$request->phone;
        $staff->birth=$request->birth;
        $staff->sex=$request->gender;
        if ($request->image!=null) {
            $staff->avatar=$this->ImgUpload($request);
        } else {
            $staff->avatar=$staff->avatar;
        }
        $staff->address=$request->address;
        $staff->save();
        return back();
    }
    public function invoice()
    {
        $staff=staff::where('user', Auth()->user()->id)->first();
        $customer=customer::where('user', Auth()->user()->id)->first();
        $invoices=invoice::where('id_customer', Auth()->user()->id)->get();
        return view('shop.invoice.invoice', compact('customer', 'staff', 'invoices'));
    }
    public function invoiceDetail(invoice $invoice)
    {
        return view('shop.invoice.invoice_detail', compact('invoice'));
    }
    public function invoice_ajax()
    {
        $customer=customer::where('user', Auth()->user()->id)->first();
        $staff=staff::where('user', Auth()->user()->id)->first();
        $invoices=invoice::where('id_customer', Auth()->user()->id)->get();
        return view('shop.invoice.invoice-ajax', compact('customer', 'staff', 'invoices'));
    }
    public function address()
    {
        $customer=customer::where('user', Auth()->user()->id)->first();
        return view('shop.address.address', compact('customer'));
    }
    public function comment_store(Request $request, $id)
    {
        $comments=comment::where('id_product', $id)->get();
        $comment=new comment();
        $rating=new rating();
        $hasRole=hasRole::where('model_id', Auth()->user()->id)->first();
        $comment->comment=$request->comment;
        $comment->id_product=$id;
        $comment->id_user=Auth()->user()->id;
        $comment->role_user=$hasRole->role_id;
        $comment->save();
        $rating->id_comment=$comment->id;
        $rating->rate=$request->rating;
        $rating->id_product=$id;
        $rating->id_user=Auth()->user()->id;
        /* dd($rating); */
        $rating->save();

        return $this->comment_page($id);
    }

    public function comment_page($id)
    {
        $rate=rating::where('id_product', $id)->get();

        $comments=comment::where('id_product', $id)->get();
        return view('shop.comment.comment', compact('comments', 'rate'));
    }
    public function checkout()
    {
        $staff=staff::where('user', Auth()->user()->id)->first();
        $customer=customer::where('user', Auth()->user()->id)->first();
        return view('shop.checkout', compact('staff', 'customer'));
    }

    public function invoice_store(Request $request)
    {
        $invoice=new invoice();
        $invoice->id_customer=Auth()->user()->id;
        $invoice->invoice_code='HD'.rand(99999, 999999) ;
        $invoice->tax=$request->tax;
        $invoice->ship=$request->ship;
        $invoice->address=$request->address;
        $invoice->phone=$request->phone;
        $invoice->price=$request->price;
        $invoice->total_price=$request->total;
        $invoice->save();
        foreach (Session("Cart")->products as $item) {
            $invoiceDetail=new invoiceDetail;
            $invoiceDetail->invoice_id = $invoice->id;
            $invoiceDetail->id_product=$item['productInfo']->id;
            $invoiceDetail->price=$item['productInfo']->price;
            $invoiceDetail->unit=$item['quanty'];
            $invoiceDetail->amount=$item['productInfo']->price*$item['quanty'];
            $invoiceDetail->save();
        }
        session()->put('invoice_id', $invoice->id);
        session()->forget('Cart');
        return redirect()->route('confirmation');
    }

    public function ImgUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $request->validate(
                    [
                    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]
                );
                $imageName=time().'.'.$request->image->extension();
                $request->image->move(public_path('Img/customer-avatar'), $imageName);
                return $imageName;
            }
            return '';
        }
    }

    public function confirmation()
    {
        $invoice = invoice::find(session('invoice_id'));
        $invoice_detail = $invoice->details;
        return view('shop.confirmation', compact('invoice', 'invoice_detail'));
    }
}
