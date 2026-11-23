<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');
Route::view('/articles', 'articles');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/contacts/email', [ContactsController::class, 'email'])->name('contacts.email');
