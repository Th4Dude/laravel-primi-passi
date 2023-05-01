<?php

use Illuminate\Support\Facades\Route;

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

    $data = [
        'title' => 'Prove con laravel',
        'text' => 'Vediamo cosa succede',
    ];
    return view('home', $data);
});

Route::get('/newPage', function () {

    $data = [
        'title' => 'Eccomi',
        'text' => 'Vediamo cosa succede se riprovo sotto',
    ];
    return view('newPage', $data);
});
