<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KompetisiController;

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

// Route::get('/', function () {
//     return view('index.main');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/statistik', function () {
        return view('home.statistik', [
            "page" => 'statistik'
        ]);
    });

    Route::get('/pengguna', [UserController::class, 'index']);
    Route::delete('pengguna/{id}',[UserController::class, 'destroy']);

    // Route::get('/pengguna', function () {
    //     return view('home.pengguna.home', [
    //         "title" => "pengguna"
    //     ]);
    // });

    Route::get('/detailpengguna/{id}', [UserController::class, 'detail']);
    Route::get('/detailpenggunaa/{id}', [UserController::class, 'detail2']);
    // Route::get('/detailpengguna', function () {
    //     return view('home.pengguna.detail', [
    //         "title" => "pengguna"
    //     ]);
    // });

    // Route::get('/kompetisi', function () {
    //     return view('home.kompetisi.home',[
    //         "title" => "kompetisi"
    //     ]);
    // });
    Route::get('/kompetisi', [KompetisiController::class, 'index']);
    Route::get('/tambahkompetisi', [KompetisiController::class, 'tambah']);
    Route::get('/editkompetisi/{id}/edit', [KompetisiController::class, 'edit']);
    Route::put('/editkompetisi/{id}', [KompetisiController::class, 'update']);
    Route::post('/kompetisi/store', [KompetisiController::class, 'store']);

    // Route::get('/tambahkompetisi', function () {
    //     return view('home.kompetisi.add',[
    //         "title" => "kompetisi"
    //     ]);
    // });

    // Route::get('/peta', function () {
    //     return view('home.peta.home',[
    //         "title" => "peta"
    //     ]);
    // });
    Route::get('/peta', [MapController::class, 'index']);
    Route::get('/editpeta/{id}/edit', [MapController::class, 'edit']);
    Route::put('/editpeta/{id}', [MapController::class, 'update']);
    Route::get('/tambahpeta', [MapController::class, 'tambah']);
    Route::post('/tambahpeta/store', [MapController::class, 'store']);
    Route::delete('/peta/{id}', [MapController::class, 'destroy']);
    Route::get('/peta/detaildestroy/{id}', [MapController::class, 'detaildestroy']);
});
// Route::get('/tambahpeta', function () {
//     return view('home.peta.add',[
//         "title" => "peta"
//     ]);
// });

Route::get('/', [LoginController::class, 'showlogin'])->name('login');
Route::post('/login/store', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);

// Route::get('/editpeta', function () {
//     return view('home.peta.edit',[
//         "title" => "peta"
//     ]);
// });
