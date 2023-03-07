<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Client;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with($notification = array(
        'message' => 'Post created successfully!',
        'alert-type' => 'success'
    ));
});




Route::post('registration', [ClientController::class, 'registre']);
Route::post('login', [ClientController::class, 'login']);
Route::get('logout', [ClientController::class, 'logout']);
Route::post('forget', [ClientController::class, 'forgetPassword']);
Route::post('contact', [ClientController::class, 'contact']);


Route::get('Shope', [ProductController::class, 'getProduct']);
Route::get('Category/{category}', [ProductController::class, 'getCategory']);
Route::get('product/{id_product}', [ProductController::class, 'getProductDetail']);



Route::get("Cart", [CartController::class, 'getCart']);
Route::post("removecart", [CartController::class, 'removeToCart']);
Route::post("addcart", [CartController::class, 'addToCart']);
Route::post("updatecart", [CartController::class, 'updateToCart']);
Route::post("buy", [CartController::class, 'buy']);


Route::post('add_product', [ProductController::class, 'add_product']);
Route::post('admin', [AdminController::class, 'login_admin']);
Route::get('order', [AdminController::class, 'getorder']);
Route::get('delete_order/{id}', [AdminController::class, 'delete']);
Route::get('edit_order/{id}', [AdminController::class, 'edit']);
Route::get('delete_product/{id}', [ProductController::class, 'delete']);
Route::post('edit_product/{id}', [ProductController::class, 'edit']);
Route::get('products', [ProductController::class, 'getProductforAdmin']);
Route::get('client', [ClientController::class, 'getclients']);
Route::get('delete_client/{id}', [ClientController::class, 'delete']);
Route::get('logout_admin', [AdminController::class, 'logout']);

Route::get('help', function () {
    return view("help");
});


Route::get('test', [ClientController::class , 'getnot']);