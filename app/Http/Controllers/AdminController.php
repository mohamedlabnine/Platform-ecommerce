<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login_admin(Request $request){
        $admin = Admin::all()->where('email', $request->email)->where('password', $request->password)->first();
        if($admin != null){
            $request->session()->put("admin_id", $admin->id );
            return view("Admin", ["admin" => $admin]);
            
        }
        return redirect("/");
    }

    public function getorder()
    {
        $orders = Order::paginate(7);
        return view("order" , ["orders" => $orders]);
        
    }

    public function edit($id){
        $order = Order::find($id);
        $order->status = "Delivered" ;
        $order->save();
        return redirect("order");
    }

    public function delete($id){
        $order = Order::find($id);
        $order->delete();
        return redirect("order");
    }

    function logout(){
        if(session()->has('admin_id')){
            session()->forget('admin_id');
            return redirect('/');
        }
    }
}