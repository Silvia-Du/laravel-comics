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

    $data = config('comics');
    $dataForeach = config('lists');

    return view('pages.comics', ['comics'=> $data, 'lists'=> $dataForeach]);
})->name('comics');

Route::get('/fans', function () {

    return view('pages.fans');

})->name('fans');

Route::get('/characters', function () {

    return view('pages.characters');

})->name('characters');


