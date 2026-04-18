<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Hai/{name}', [UserController::class,'show']);
// Route::get('/test', function(){
//     return 'Heloo Dunia';
// });

// Route::get('/test2', function(){
//     return 'Heloo Dunia tipu - tipu';
// });


// Route::redirect('test', '/test2');

// Route::view('/greeting', 'greeting'. ['Name' =>'Febri']);

// Route::get( '/user/{id}', action: function($id): string{
//     return "user" .$id;
// })->where(name: 'id', expression: '[0-9]+');

// Route::get( '/user/{id}', action: function($id): string{
//     return "ini profile";
// })->where(name: 'profile');

Route::get('/fullname', function(){
    $user = User::first();
    return view('greeting', compact('user'));
});

Route::get('/daftarbuku/{id}',[BookController::class, 'show'])->name('book.show');