<?php

use Illuminate\Http\Request; // Import kelas Request

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

Route::get('/hello', function () {
    return 'hello world';
});

Route::get('/tambah', function (Request $request){
    $validatedData = $request->validate([
        'angka1' => ['required', 'numeric'],
        'angka2' => ['required', 'numeric'],
    ]);

    $angka1 = $request->input('angka1');
    $angka2 = $request->input('angka2');

    $hasil = $angka1 + $angka2;

    return "Hasil penjumlahan dari $angka1 dan $angka2 adalah $hasil";
});

Route::get('/perkalian', function (Request $request) {
    if ($request->has('angka')) {
        $validatedData = $request->validate([
            'angka' => 'required|numeric'
        ]);

        $angka = $request->input('angka');
        $hasil = $angka * 2;

        return view('validasi', ['angka' => $angka, 'hasil' => $hasil]);
    } else {
        return view('validasi');
    }
});
