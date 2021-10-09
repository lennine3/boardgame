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
use App\Models\notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Session\Session;


class shopController extends Controller
{
    public function __construct()
    {
            $notifications=notification::where('status','=',1)->get();
            View::share('notifications', $notifications);
    }

    public function index()
    {
        $products=product::all();
        $productType_1=product::where('product_type_id', 1)->get();
        $productType_2=product::where('product_type_id', 2)->get();
        $productType_3=product::where('product_type_id', 3)->get();
        $productType_4=product::where('product_type_id', 4)->get();
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
        $productType_1=product::where('product_type_id', 1)->get();
        $productType_2=product::where('product_type_id', 2)->get();
        $productType_3=product::where('product_type_id', 3)->get();
        $productType_4=product::where('product_type_id', 4)->get();
        $productTypes=productType::all();
        return view('shop.category', ['products'=>$products], compact('productTypes'));
    }
    public function category_type($id, $type)
    {
        if ($type==1) {
            $products=product::where('product_type_id', $id)->orderBy('price', 'asc')->paginate(12);
        } elseif ($type==2) {
            $products=product::where('product_type_id', $id)->orderBy('price', 'desc')->paginate(12);
        } else {
            $products=product::where('product_type_id', $id)->orderBy('created_at')->paginate(12);
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
        $is_buy=false;
        $checkInvoice=0;
        if(Auth::check())
        {
            if($checkInvoice=invoice::where('customer_id','=',Auth::user()->id)->count()>0)
            {
                $invoice=invoice::where('customer_id','=',Auth::user()->id)->get();
            foreach( $invoice as $abc)
            {
                $invoice_detail=invoiceDetail::where('product_id','=',$id)->where('invoice_id','=',$abc->id)->count();
            }

            if($invoice_detail!=null)
            $is_buy=true;
            else
            $is_buy=false;
            }
        }

        $rate=rating::where('product_id', $id)->get();
        $comments=comment::where('product_id', $id)->get();
        $product_images=productImage::where('product_id', $id)->get();
        /* dd($product_images); */
        $turtorial=turtorial::where('product_id', $id)->first();
        //$productDetail=productDetail::where('product_id', $id)->first();
        $product=product::find($id);
        $relateds=product::where('product_type_id', $product->product_type_id)->get();
        $deals=product::all();
        return view('shop.single', compact('product', 'product_images', 'comments', 'rate', 'relateds', 'deals', 'turtorial','is_buy'));
    }

    public function profile()
    {
        $staff=staff::where('user_id', Auth()->user()->id)->first();
        $customer=customer::where('user_id', Auth()->user()->id)->first();
        $countKeep=invoice::where('customer_id', Auth()->user()->id)->where('status','=',1)->where('keep_product','=',1)->count();
        return view('shop.profile-user.profile', compact('customer', 'staff','countKeep'));
    }
    public function profile_ajax()
    {
        $staff=staff::where('user_id', Auth()->user()->id)->first();
        $customer=customer::where('user_id', Auth()->user()->id)->first();
        return view('shop.profile-user.profile-ajax', compact('customer', 'staff'));
    }
    public function user_update(Request $request)
    {
        $user=User::find(Auth()->user()->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        $customer=customer::where('user_id', Auth()->user()->id)->first();
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
        $staff=staff::where('user_id', Auth()->user()->id)->first();
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
        $staff=staff::where('user_id', Auth()->user()->id)->first();
        $customer=customer::where('user_id', Auth()->user()->id)->first();
        $invoices=invoice::where('customer_id', Auth()->user()->id)->where('status','=',1)->where('keep_product','=',0)->latest()->get();
        $countKeep=invoice::where('customer_id', Auth()->user()->id)->where('status','=',1)->where('keep_product','=',1)->count();
        return view('shop.invoice.invoice', compact('customer', 'staff', 'invoices','countKeep'));
    }
    public function keepProduct(){
        $staff=staff::where('user_id', Auth()->user()->id)->first();
        $customer=customer::where('user_id', Auth()->user()->id)->first();
        $invoices=invoice::where('customer_id', Auth()->user()->id)->where('status','=',1)->where('keep_product','=',1)->latest()->get();
        $countKeep=invoice::where('customer_id', Auth()->user()->id)->where('status','=',1)->where('keep_product','=',1)->count();
        return view('shop.invoice.keepproductPage', compact('customer', 'staff', 'invoices','countKeep'));
    }
    public function keepProductStore(Request $request){
        $now=Carbon::now('Asia/Ho_Chi_Minh')->addDays(3)->format('Y-m-d');
        $invoice=new invoice();
        foreach($request->checkId as $item)
        {
            $oldInvoice=invoice::find($item);
            $invoice->customer_id=Auth()->user()->id;
            $invoice->employee_id=1;
            $invoice->invoice_code='HD'.rand(99999, 999999) ;
            $invoice->vat=$invoice->vat+$oldInvoice->vat;
            //$invoice->ship_fee=$invoice->ship_fee+$oldInvoice->ship_fee;
            $invoice->ship_fee=0;
            $invoice->price=$invoice->price+$oldInvoice->price;
            $invoice->total_price=$invoice->total_price+$oldInvoice->total_price;
            $invoice->status=1;
            $invoice->order_status=1;
            $invoice->payment_method=1;
            $invoice->keep_product=0;
            $invoice->expected_date=$now;

            $oldInvoice->status=0;
            $oldInvoice->save();
        }
        $invoice->save();
        foreach ($request->checkId as $item) {
                $oldInvoiceDetail=invoiceDetail::where('invoice_id',$item)->get();
                foreach($oldInvoiceDetail as $itemDetail)
                {
                    $newTask = $itemDetail->replicate();
                    $newTask->invoice_id = $invoice->id; // the new project_id
                    $newTask->save();
                }
        }
        return redirect()->back();

    }
    public function invoiceDetail(invoice $invoice)
    {
        return view('shop.invoice.invoice_detail', compact('invoice'));
    }
    public function invoice_ajax()
    {
        $customer=customer::where('user_id', Auth()->user()->id)->first();
        $staff=staff::where('user_id', Auth()->user()->id)->first();
        $invoices=invoice::where('customer_id', Auth()->user()->id)->get();
        return view('shop.invoice.invoice-ajax', compact('customer', 'staff', 'invoices'));
    }
    public function address()
    {
        $customer=customer::where('user_id', Auth()->user()->id)->first();
        return view('shop.address.address', compact('customer'));
    }
    public function comment_store(Request $request, $id)
    {
        $comments=comment::where('product_id', $id)->get();
        $comment=new comment();
        $rating=new rating();
        $hasRole=hasRole::where('model_id', Auth()->user()->id)->first();
        $comment->comment=$request->comment;
        $comment->product_id=$id;
        $comment->user_id=Auth()->user()->id;
        $comment->role_user=$hasRole->role_id;
        $comment->save();
        $rating->id_comment=$comment->id;
        $rating->rate=$request->rating;
        $rating->product_id=$id;
        $rating->id_user=Auth()->user()->id;
        /* dd($rating); */
        $rating->save();

        return $this->comment_page($id);
    }

    public function comment_page($id)
    {
        $rate=rating::where('product_id', $id)->get();
        $comments=comment::where('product_id', $id)->get();
        return view('shop.comment.comment', compact('comments', 'rate'));
    }
    public function checkout()
    {
        $staff=staff::where('user_id', Auth()->user()->id)->first();
        $customer=customer::where('user_id', Auth()->user()->id)->first();
        return view('shop.checkout', compact('staff', 'customer'));
    }

    public function invoice_store(Request $request)
    {
        $now=Carbon::now('Asia/Ho_Chi_Minh')->addDays(3)->format('Y-m-d');
        $invoice=new invoice();
        $notification=new notification();
        $notification->content="Your order has been received";
        $notification->user_id=Auth::user()->id;
        $notification->save();
        $invoice->customer_id=Auth()->user()->id;
        $invoice->employee_id=1;
        $invoice->invoice_code='HD'.rand(99999, 999999) ;
        $invoice->vat=$request->tax;
        $invoice->ship_fee=$request->ship;
        $invoice->price=$request->price;
        $invoice->total_price=$request->total;
        $invoice->status=1;
        $invoice->order_status=1;
        $invoice->payment_method=$request->paymentMethod;
        if($request->keep!=null)
        $invoice->keep_product=$request->keep;
        else
        $invoice->keep_product=0;
        $invoice->expected_date=$now;
        $invoice->save();
        foreach (Session("Cart")->products as $item) {
            $invoiceDetail=new invoiceDetail;
            $invoiceDetail->invoice_id = $invoice->id;
            $invoiceDetail->product_id=$item['productInfo']->id;
            $invoiceDetail->price=$item['productInfo']->price;
            $invoiceDetail->number=$item['quanty'];
            $invoiceDetail->total_price=$item['productInfo']->price*$item['quanty'];
            $invoiceDetail->save();

            $product=product::find($item['productInfo']->id);
            $product->stock=$product->stock-$item['quanty'];
            $product->save();
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
        /* dd($invoice_detail); */
        foreach($invoice_detail as $items){
            $id[]=$items->id;
            $product_id[] = $items->product->name;
            $price[] = $items->price;
            $number[] = $items->number;
            $discount[]=$items->discount;
            $totalPrice[]=$items->total_price;
        }
        $data['id']=$id;
        $data['product_id']=$product_id;
        $data['price']=$price;
        $data['number']=$number;
        $data['discount']=$discount;
        $data['total_price']=$totalPrice;


        Mail::send('mail.testMail', compact('data'), function($message)
        {
            $message->to('tvdkhoa1801@gmail.com')->subject('Confirm you order');
        });

        $staff=staff::where('user_id', Auth()->user()->id)->first();
        $customer=customer::where('user_id', Auth()->user()->id)->first();
        return view('shop.confirmation', compact('invoice', 'invoice_detail','customer','staff'));
    }

    public function notificationStatus($id)
    {

        $notification=notification::find($id);
        $notification->status=0;
        $notification->save();
        return redirect()->back();
    }
    public function notificationAllStatus()
    {
        $notification=notification::where('user_id',Auth::user()->id)->where('status',1)->get();
        foreach($notification as $value)
        {
            $value->status=0;
            $value->save();
        }
        return redirect()->back();
    }
    public function aboutPage()
    {
        return view('shop.about-us');
    }
    public function cartPage()
    {
        $products=product::inRandomOrder()->get();
        return view('shop.cart',compact('products'));
    }

    public function registerCompletePage(){
        return view('shop.registerComplete');
    }
}
