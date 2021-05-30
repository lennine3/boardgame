<?php

namespace App\Http\Controllers;

use App\Http\Middleware\checkLogin;
use Illuminate\Http\Request;
use App\Models\supplier;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use HasRole;
class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('checkLogin');
    }
    public function index()
    {
        //
        //tao role

        //tao role chi dinh => chi 1 so nguoi
        //tao role
        /* $role = Role::create(['name' => 'staff']); */

        //tao permission
        /* $permission=Permission::create(['name'=>'store supplier']); */

        //tao permission cho user
        /* auth()->user()->givePermissionTo('edit user'); */
        //tao role cho user chi dinh
        /* $user=User::findOrFail(2); */
         /* $user->assignRole('staff'); */
         /* $user->givePermissionTo('edit user'); */

        //xem quyen

        /* return auth()->user()->permissions; */
        /* return auth()->user()->getDirectPermissions(); */
        /* return auth()->user()->getPermissionsViaRoles(); */
        /* return auth()->user()->getAllPermissions(); */

    //tao role rong lon => ai nam trong role do dung dc => permission cho role
        //Tao permission  => tim role voi id la 1 => cho role permission moi tao
        /* $permission = Permission::create(['name'=>'edit index']);*/
        /* $permission=Permission::findById(3);
        $role = Role::findById(2);
        $role->givePermissionTo($permission); */

        //lay thong tin cac user co role admin
        /* return User::role('admin')->get(); */

        $supplier=supplier::all();
        return view('admin.supplier.supplier',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $supplier=new supplier;
        $supplier->name = $request->name;
        $supplier->address=$request->address;
        $supplier->phone=$request->phone;
        $supplier->email=$request->email;
        $supplier->save();
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        /* $supplier= supplier::findOrFail($id);
        return new supplier($supplier); */
        $supplier=supplier::findOrFail($id);
        return $supplier;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
