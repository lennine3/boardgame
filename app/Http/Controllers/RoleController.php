<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLogin');
    }
    //
    public function index(){
        $roles = Role::all();
        return view('admin/user/role',compact('roles'));
    }

    public function roleStore(Request $request){
        $role = Role::create(['name' => $request->name]);
        return redirect()->route('role');
    }
}
