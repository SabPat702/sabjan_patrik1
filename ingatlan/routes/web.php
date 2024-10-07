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
    $username = 'John';
    return view('bemutatkozas', ['name' => $username]);
});
//Route::view('/', 'welcome', ['name' => 'John']); <--hibás ?

Route::get('/felhasznalo', function () {
    return view('felhasznalo');
});

Route::get('/bejelentkezes', function () {
    return view('bejelentkezes');
});

Route::get('/pass-array', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the work'
    ];
    $foobar = 'foobar';
    //return view('tasklist', ['tasks' => $tasks]);
    //return view('tasklist')->withTasks($tasks)->withFoo($foobar);
    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
    ]);
});


