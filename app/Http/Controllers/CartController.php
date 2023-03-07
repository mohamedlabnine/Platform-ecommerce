<?php

namespace App\Http\Controllers;

use App\Client;
use App\Mail\MyTestMail;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Object_;

class CartController extends Controller
{
    function getCart(){
        $id = (int)session("client_id") ;
        return view("cart", ["items" => \Cart::session($id)->getContent()]);

    }

    function addToCart(Request $request){
        $id = (int)session("client_id") ;
        \Cart::session($id)->add(array(
            'id' => \Cart::session($id)->getContent()->count() + 1,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->qty,
            'attributes' => array($request->image , (int)\Cart::session($id)->getTotal() + $request->price * $request->qty, )
        ));
        return redirect("Cart");
    }

    function updateToCart(Request $request ){
        $id = (int)session("client_id") ;
        $current_item= \Cart::session($id)->get($request->id);
        \Cart::session($id)->update($request->id ,[
            'quantity' => $request->qty - $current_item->quantity  ,
            'attributes' => array($current_item->attributes[0] , \Cart::session($id)->getTotal() + $current_item->price * ($request->qty - $current_item->quantity), )
        ]);
        return redirect("Cart");
        
    }
    function removeToCart(Request $request ){
        $id = (int)session("client_id") ;
        \Cart::session($id)->remove($request->id);
        return redirect("Cart");
    }

    function buy(Request $request){
        $id = (int)session("client_id") ;
        foreach(\Cart::session($id)->getContent() as $item){
            $order = new Order();
            $order->name_product = $item->name;
            $order->quntity_product = $item->quantity;
            $order->price_product = $item->price;
            $order->total_price = $item->price * $item->quantity;
            $order->id_client = $id;
            $order->code_cart = $request->cart;
            $order->phone = $request->phone;
            $order->adress = $request->adress;
            $order->status ="No Delivred";
            $order->save();
        }
        \Cart::clear();

        $this->sendemail($id) ;
        
        return redirect("Shope");
    }


    function sendemail($id){
        $client = Client::find($id) ;

        $details = [$client->first_name, $client->last_name, "your request has been successful"];
        \Mail::to($client->email)->send(new MyTestMail($details));
    }
}