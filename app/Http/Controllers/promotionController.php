<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use App\Models\promotion;
class promotionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('checkLogin');
    }

    public function index()
    {
        $promotions=promotion::all();
        return view('admin.promotion.promotion',compact('promotions'));
    }
    public function store(Request $request)
    {
        $promotion=new promotion();
        $promotion->name=$request->name;
        $promotion->rate=$request->rate;
        $promotion->save();
        /* dd($promotion); */
        return redirect()->back();
    }
}
