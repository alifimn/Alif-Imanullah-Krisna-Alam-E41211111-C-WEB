<?php

use App\Http\Controllers\ManagementUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
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

//Route::get('/user',[ManagementUserController::class,'index']);

//menambakan alamat url baru yang menghubungkan dengan ManagementUserController.php

// Route::resource('/user',ManagementUserController::class);

//menambakan alamat-alamat url baru yang menghubungkan dengan method-method ManagementUserController.php
//tanpa mendeklarasikan banyak url

// Route::get("/home",function(){
//     return view("home");
// }); //untuk menambakan alamat url baru yang menghubungkan dengan home.blade.php

Route::group(['namespace' => ''], function(){
    Route::resource('home', HomeController::class);
});

Route::group(['namespace' => ''], function(){
    Route::resource('dashboard', DashboardController::class);
});
