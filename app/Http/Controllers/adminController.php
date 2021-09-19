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
        $now = Carbon::now();
        $invoiceYearCount=invoice::whereYear('created_at', '=', $now->year)->get();
        $staffCount=staff::all()->count();
        $customerCount=customer::all()->count();
        $invoiceCount=invoice::whereMonth('created_at', '=', $now->month)->count();
        $months=invoice::select(DB::raw("Month(created_at) as month"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('month');
        $incomes=invoice::select(DB::raw("SUM(total_price) as sum"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('sum');
        $invoiceJan=invoice::whereMonth('created_at', '=', $now->month)->get();
        $datas=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
        $bestSale=bestSale::orderBy('sell_number','desc')->take(5)->get('sell_number');
       // dd($bestSale);
        foreach($months as $index =>$month)
        {
            $datas[$month]=$incomes[$index];
        }
        
        return view('admin/index',compact('staffCount','customerCount','invoiceYearCount','invoiceCount','datas','bestSale'));
    }
}
