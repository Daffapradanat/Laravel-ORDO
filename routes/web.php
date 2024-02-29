<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return 'hello world';
});

Route::get('/perkalian', function (Request $request) {
    $angka1 = $request->query('angka1');
    $angka2 = $request->query('angka2');

    $hasil = $angka1 * $angka2;

    return response()->json(['hasil' => $hasil]);
});
