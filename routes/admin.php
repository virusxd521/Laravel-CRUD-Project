<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;


// Get method
Route::get('/admin/authors', [AuthorController::class, 'index']);

// Post method -> name method for the route
// The convention is to create first the name of the controller and then the name of the method inside this controller
Route::post('/admin/authors', [AuthorController::class, 'store'])->name('author.store');


Route::get('/admin/authors/create', [AuthorController::class, 'create']);


