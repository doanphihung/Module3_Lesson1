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

Route::get('/dictionary', function () {
    return view('dictionary');
});


Route::post('/dictionary', function (Illuminate\Http\Request $request) {
        $keyword = $request->keyword;

        $arrayWord = [
            'apple' => 'qua tao',
            'pen' => 'cai but',
            'car' => 'oto'
        ];


        foreach ($arrayWord as $key => $value) {
            if ( $keyword == $key ) {
                echo 'Nghĩa của từ ' . $keyword . ' là: ' . $arrayWord[$key];
            }
        }
});
