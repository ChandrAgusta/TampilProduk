<?php

use App\Http\Controllers\ProdukController;
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

// Route::get('/',[ProdukController::class, 'index']);
// // Route::get('/details/{id}', [ProdukController::class, 'details']);

Route::get('/', function () {
    $data = App\Models\Produk::all(); // Ganti 'YourModel' dengan model yang sesuai

    return view('home', compact('data'));
});


Route::get('/home/{id}', function ($id) {
    $data = App\Models\Produk::find($id); // Ganti 'YourModel' dengan model yang sesuai

    return view('details', compact('data'));
});




