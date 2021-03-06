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

$issues = config('comics');

    return view('home', compact('issues'));
});

Route::get('/issue/{id}', function($id) {
    
$issues = config('comics');
$comic = $issues[$id];

    return view('issue', compact('comic'));

})->name('issue');