<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    //
    public function index(){
        $customers=customer::all();
        return view('admin.customer.customer',compact('customers'));
    }
}
