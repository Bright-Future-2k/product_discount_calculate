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

//use Illuminate\Routing\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',function (){
    return view('index');
});

Route::post('/result',function (Illuminate\Http\Request $request){
    $description = $request->pro_description;
    $price = $request->list_price;
    $discount = $request->discount;

    $discount_Amount= $price * $discount * 0.1;
    return view('result',compact("discount_Amount",'description','price','discount'));
});
