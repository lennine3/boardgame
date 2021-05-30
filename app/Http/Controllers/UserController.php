<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLogin');
    }
    //
    public function index(){
        $users = User::all();
        return view('admin/user/user',compact('users'));
    }
    public function edit($id){
        $usersedit = User::findOrFail($id);
        $users = User::all();
        return view('admin/user/editUser',compact('users','usersedit'));
    }
    public function update(Request $request){
        $users = User::findOrFail($request->id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=Hash::make($request->password);
        $users->save();
        return redirect()->route('user');
    }
}
