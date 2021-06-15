<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/discount', function () {
    return view('discount');
});


Route::post('/discount', function (Illuminate\Http\Request $request) {
    $productDescription = $request->chitiet;
    $price = $request->price;
    $discountPercent = $request->discount;
    
    $discountAmount = $price * ($discountPercent * 0.01);
    $discountPrice = $price - $discountAmount;
    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent'],));

});
