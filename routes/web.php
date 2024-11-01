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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
    return view('home', [
        "title_website" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        'title_website' => 'About'
    ]);
});

Route::get('/youtube', function(){
    return view('youtube', [
        'title_website' => 'About'
    ]);
});

Route::get('/archive', function(){
    return view('archive', [
        'title_website' => 'About'
    ]);
});

Route::get('/blog', function(){
    return view('blog', [
        'title_website' => 'diBlog-inAja'
    ]);
});

Route::get('/project', function(){
    return view('project', [
        'title_website' => 'Project'
    ]);
});