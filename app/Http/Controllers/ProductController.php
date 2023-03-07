<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product ;

class ProductController extends Controller
{
    function getProduct(){
        $Products_offre =  Product::all()->whereNotIn("offre" , [0])->take(6) ;
        $New_product =  Product::all()->sortBy('created_at')->take(6);
        return view("Shope", ['products_offre' => $Products_offre,'new_products' => $New_product]);
    }

    function getCategory($category){
        $ProductsByCategory = Product::all()->where("Category", $category);
        return view("Category", ['products' => $ProductsByCategory]);
    }

    function getProductDetail($id){
        $product = Product::find($id);
        return view("product", ['product' => $product]);
    }

    public function getProductforAdmin(){
        $products = Product::paginate(7);
        return view("product_admin" , ["products" => $products]);
    }

    public function edit($id , Request $request){
        $product = Product::find($id);
        $product->name = $request->Name ;
        $product->price = $request->Price ;
        $product->quantity = $request->Quantity ;
        $product->category = $request->Category ;
        $product->description = $request->des ;
        $product->offre = $request->Offre ;
        if( !empty($request->file('Image'))){
            $product->image = $request->file('Image')->getClientOriginalName() ;
            $request->file('Image')->move(public_path('Image'), $request->file('Image')->getClientOriginalName());
        }
        else{
            $product->image = $product->image ;
        }
        
        $product->save();
        return redirect("products");
    }

    public function delete($id){
        $order = Product::find($id);
        $order->delete();
        return redirect("products");
    }

    public function add_product(Request $request){
        $product = new Product();
        $product->name = $request->Name ;
        $product->price = $request->Price ;
        $product->originale_price = $request->Price ;
        $product->quantity = $request->Quantity ;
        $product->category = $request->Category ;
        $product->description = $request->des ;
        $product->offre = $request->Offre ;
        $product->image = $request->file('Image')->getClientOriginalName(); ;
        $request->file('Image')->move(public_path('Image'), $request->file('Image')->getClientOriginalName());
        $product->save();
        return redirect("products");

    }
}