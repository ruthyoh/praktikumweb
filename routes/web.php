<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\DataController;
use App\Http\Controllers\ListProdukController;

Route::get('/', [HomeController::class, 'index']);

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


Route::get('/mobil', function () {
    return view('mobil');
});

// Route untuk menampilkan detail produk (optional ID)
Route::get('/listproduct', [ProductController::class, 'listProduct']);


Route::get('/home', function () {
    return view('pages/home');
});
Route::get('/listproduk', [ListProdukController::class, 'show']);
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');