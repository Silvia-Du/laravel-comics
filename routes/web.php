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

    $dataForeach = config('lists');

    return view('pages.fans', ['lists'=> $dataForeach]);

})->name('fans');


Route::get('/characters', function () {

    $dataForeach = config('lists');

    return view('pages.characters', ['lists'=> $dataForeach]);

})->name('characters');


Route::get('/movies', function () {

    $dataForeach = config('lists');

    return view('pages.movies', ['lists'=> $dataForeach]);

})->name('movies');


