<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

<<<<<<< HEAD

=======
<<<<<<< HEAD
Route::get('/', function() {
    return view('welcome'); 
 });
=======
// Route::get('/', function() {
//     return view('welcome'); 
// });
>>>>>>> 2d7670c2410b2e02a882d743389faa64bcada6e7
>>>>>>> 086e3db7e166e1364e837e46abce44e312c7df18

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




