<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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


//Bai 1
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $posts=[
        ['name'=>'Post 1'],
        ['name'=> 'Post 2'],
        ['name'=> 'Post 3'],
        ['name'=> 'Post 4'],
        ['name'=> 'Post 5'],
        ['name'=> 'Post 6'],
        ['name'=> 'Post 7'],
        ['name'=> 'Post 8'],
    ];
    return view('home', compact('posts'));
});

Route::get('/', function () {
    return view('tasks');
});
