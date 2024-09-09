<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengunjungController;

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
    return view('sesi/login');
});

Route::get('home', [PengunjungController::class, 'home'])->name('home');
Route::get('login', [PengunjungController::class, 'halamanlogin'])->name('login');
Route::post('postlogin', [PengunjungController::class, 'postlogin'])->name('postlogin');





Route::get('/home', [PengunjungController::class, 'index']);

Route::get('pengunjung', [PengunjungController::class, 'data_pengunjung']);

Route::get('add_pengunjung', [PengunjungController::class, 'add_pengunjung']);

Route::post('pengunjung', [pengunjungController::class, 'addprocess']);

Route::get('edit_pengunjung{id}', [pengunjungController::class, 'edit_pengunjung']);

Route::patch('{id}', [pengunjungController::class, 'editprocess']);

Route::delete('pengunjung/{id}', [pengunjungController::class, 'delete_pengunjung']);

Route::get('logout', [pengunjungController::class, 'logout']);