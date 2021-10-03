<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use App\Models\staff;
use App\Models\customer;
use App\Models\invoice;
use Carbon\Carbon;
use App\Models\bestSale;
use App\Models\todoList;
use App\Models\todoUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('checkLogin');
    }
    public function index()
    {
        //
        /* Carbon */
        $todoLists=todoList::all();
        $todoUserDone=todoUser::all();
        $todoDone=todoList::join('todouser','todolist.id','=','todouser.todo_id')->where('todouser.user_id','=',Auth::user()->id)->where('is_done','=',1)->get();
        $todoUser=todoList::join('todouser','todolist.id','=','todouser.todo_id')->where('todouser.user_id','=',Auth::user()->id)->where('is_done','=',0)->get('todolist.*');
        $now = Carbon::now();
        $Staffs=staff::all();
        $invoiceYearCount=invoice::whereYear('created_at', '=', $now->year)->get();
        $staffCount=staff::all()->count();
        $customerCount=customer::all()->count();
        $invoiceCount=invoice::whereMonth('created_at', '=', $now->month)->count();
        $months=invoice::select(DB::raw("Month(created_at) as month"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('month');
        $incomes=invoice::select(DB::raw("SUM(total_price) as sum"))->whereYear('created_at',date('Y'))->where('keep_product','=',0)->groupBy(DB::raw("Month(created_at)"))->pluck('sum');
        //$incomes=invoice::select(DB::raw("SUM(total_price) as sum"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('sum');
        $invoiceJan=invoice::whereMonth('created_at', '=', $now->month)->get();
        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
        $bestSale=bestSale::orderBy('sell_number','desc')->take(5)->get('sell_number');
        foreach($months as $index =>$month)
        {
            $datas[$month]=$incomes[$index];
        }
        return view('admin/newIndex',compact('staffCount','customerCount','invoiceYearCount','invoiceCount','datas','bestSale','Staffs','todoUser','todoLists','todoDone','todoUserDone'));
    }

    public function newIndex(){
        $todoLists=todoList::all();
        $todoUserDone=todoUser::all();
        $todoDone=todoList::join('todouser','todolist.id','=','todouser.todo_id')->where('todouser.user_id','=',Auth::user()->id)->where('is_done','=',1)->get();
        $todoUser=todoList::join('todouser','todolist.id','=','todouser.todo_id')->where('todouser.user_id','=',Auth::user()->id)->where('is_done','=',0)->get('todolist.*');
        $now = Carbon::now();
        $Staffs=staff::all();
        $invoiceYearCount=invoice::whereYear('created_at', '=', $now->year)->get();
        $staffCount=staff::all()->count();
        $customerCount=customer::all()->count();
        $invoiceCount=invoice::whereMonth('created_at', '=', $now->month)->count();
        $months=invoice::select(DB::raw("Month(created_at) as month"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('month');
        $incomes=invoice::select(DB::raw("SUM(total_price) as sum"))->whereYear('created_at',date('Y'))->where('keep_product','=',0)->groupBy(DB::raw("Month(created_at)"))->pluck('sum');
        //$incomes=invoice::select(DB::raw("SUM(total_price) as sum"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('sum');
        $invoiceJan=invoice::whereMonth('created_at', '=', $now->month)->get();
        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
        $bestSale=bestSale::orderBy('sell_number','desc')->take(5)->get('sell_number');
        foreach($months as $index =>$month)
        {
            $datas[$month]=$incomes[$index];
        }
        return view('admin/newIndex',compact('staffCount','customerCount','invoiceYearCount','invoiceCount','datas','bestSale','Staffs','todoUser','todoLists','todoDone','todoUserDone'));
    }

    public function saveTodo(Request $request){
        $todoList= new todoList();

        $todoList->date=$request->date;
        $todoList->content=$request->content;
        $todoList->save();
        foreach($request->user as $user){
            $todoUser= new todoUser();
            $todoUser->todo_id=$todoList->id;
            $todoUser->user_id=$user;
            $todoUser->save();
        }
        toast('Add success','success');
        return redirect()->back();
    }

    public function checkDone($id){
        $todoUser=todoUser::where('todo_id',$id)->where('user_id',Auth::user()->id)->first();
        $todoUser->is_done=1;
        $todoUser->save();
        //return view('admin.listTodo');
        return $this->listUserPage();
    }
    public function listUserPage()
    {
        $todoLists=todoList::all();
        $todoUserDone=todoUser::all();
        $todoDone=todoList::join('todouser','todolist.id','=','todouser.todo_id')->where('todouser.user_id','=',Auth::user()->id)->where('is_done','=',1)->get();
        $todoUser=todoList::join('todouser','todolist.id','=','todouser.todo_id')->where('todouser.user_id','=',Auth::user()->id)->where('is_done','=',0)->get('todolist.*');
        return view('admin.listTodo',compact('todoUser','todoLists','todoDone','todoUserDone'));
    }
    public function invoicePage(){
        $invoices=invoice::all();
        return view('admin.invoice.invoice',compact('invoices'));
    }
    public function invoiceLock($id){
        $invoices=invoice::find($id);
        if($invoices->status==0)
        $invoices->status=1;
        else
        $invoices->status=0;
        $invoices->save();
        toast('Invoice Status change','success');
        return redirect()->back();
    }

    public function invoiceChange($id){
        $invoices=invoice::find($id);
        $invoices->order_status=2;
        $invoices->save();
        toast('Order status change','success');
        return redirect()->back();
    }

    public function mailTest(){
        $details = [
            'title' => 'test mail',
            'body' => 'mail body'
        ];
        Mail::send('mail.testMail', compact('details'), function($message)
        {
            $message->to('tvdkhoa1801@gmail.com')->subject('Test');
        });

        //Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
    }
}
