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
//Route ini akan menangani request yang masuk pada URL utama '/' dan akan mengembalikan view 'welcome'

Route::get('/login', function () {
    return view('login');
});
//Route ini akan menangani request yang masuk pada URL '/login' dan akan mengembalikan view 'login'

Route::get('/user', [UserController::class, 'index']);
//Route ini akan menangani request yang masuk pada URL '/user' dan akan menjalankan method 'index' pada controller 'UserController'

Route::get('user1/{id}', function ($id){
    return 'User '.$id;
});
//Route ini akan menangani request yang masuk pada URL dengan format 'user1/{id}', dimana {id} adalah parameter dinamis yang akan digunakan di dalam callback function

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId){
    return ['Post : '.$postId,
    'Comment : '.$commentId
    ];
});
//Route ini akan menangani request yang masuk pada URL dengan format 'posts/{post}/comments/{comment}', dimana {post} dan {comment} adalah parameter dinamis yang akan digunakan di dalam callback function

Route::get('user2/{name?}', function ($name = null){
    return $name;
});
//Route ini akan menangani request yang masuk pada URL dengan format 'user2/{name?}', dimana {name} adalah parameter opsional yang akan digunakan di dalam callback function

Route::get('user3/{name?}', function ($name = 'John'){
    return $name;
});
//Route ini akan menangani request yang masuk pada URL dengan format 'user3/{name?}', dimana {name} adalah parameter opsional yang akan digunakan di dalam callback function

Route::get('user4/{name}', function ($name){

})->where('name', '[A-Za-z]+');
//Route ini akan menangani request yang masuk pada URL dengan format 'user4/{name}', dimana {name} adalah parameter yang akan digunakan di dalam callback function. Namun, route ini memiliki constraint atau pembatasan pada nilai yang diperbolehkan untuk parameter {name}

Route::get('user5/{id}', function($id){

})->where('id', '[0-9]+');
//Route ini akan menangani request yang masuk pada URL dengan format 'user5/{id}', dimana {id} adalah parameter yang akan digunakan di dalam callback function. Namun, route ini memiliki constraint atau pembatasan pada nilai yang diperbolehkan untuk parameter {id}

Route::get('user6/{id}/{name}', function ($id, $name){

})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//Route ini akan menangani request yang masuk pada URL dengan format 'user6/{id}/{name}', dimana {id} dan {name} adalah parameter yang akan digunakan di dalam callback function. Namun, route ini memiliki constraint atau pembatasan pada nilai yang diperbolehkan untuk masing-masing parameter {id} dan {name}

Route::get('search/{search}', function($search){
    return $search;
})->where('search', '.*');
//Route ini akan menangani request yang masuk pada URL dengan format 'search/{search}', dimana {search} adalah parameter yang akan digunakan di dalam callback function. Namun, route ini memiliki constraint atau pembatasan pada nilai yang diperbolehkan untuk parameter {search}

Route::get('user/profile', function(){

})->name('profile');
//Route ini akan menangani request yang masuk pada URL dengan format 'user/profile', dan tidak memiliki parameter apapun. Route ini juga memiliki sebuah nama (name) yang bisa digunakan untuk mengidentifikasi route tersebut
