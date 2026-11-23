<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// BEGIN (write your solution here)
$team = [
    ['name' => 'Hodor', 'position' => 'programmer'],
    ['name' => 'Joker', 'position' => 'CEO'],
    ['name' => 'Elvis', 'position' => 'CTO'],
];

Route::get('about', function () use ($team) {
    return view('about', ['team' => $team]);
});
Route::get('/articles', function () {
    $articles = [
        ['id' => 1, 'title' => 'Первая статья о Laravel'],
        ['id' => 2, 'title' => 'Маршруты и контроллеры'],
        ['id' => 3, 'title' => 'Шаблоны Blade'],
    ];

    return view('articles', ['articles' => $articles]);
})->name('articles');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/contacts/email', [ContactsController::class, 'email'])->name('contacts.email');
// END
