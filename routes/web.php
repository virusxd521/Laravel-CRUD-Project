<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\AuthorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// I have problem with adding a new route file
// Solution checking again the steps 

// Route::get('/index', [AuthorController::class, 'index']);