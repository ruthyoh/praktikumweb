<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function() {
    return view('welcome'); 
 });


 Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
 });

 // routes/web.php 

 Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });


    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
    return view('list_barang', compact('id', 'nama'));
});


Route::get('/menu', function () {
    $items = [
        ['id' => 1, 'name' => 'Beras Pandan Wangi', 'harga' => 15000],
        ['id' => 2, 'name' => 'Tepung Terigu', 'harga' => 20000],
        ['id' => 3, 'name' => 'Bagon Cair', 'harga' => 11500],
        ['id' => 4, 'name' => 'Penyedap Rasa', 'harga' => 12000],
        ['id' => 5, 'name' => 'Minyak Goreng', 'harga' => 14000],
    ];
    return view('menu', compact('items'));
});

Route::get('/mobil', function () {
    return view('mobil');
});




