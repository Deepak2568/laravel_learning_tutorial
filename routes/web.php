<?php

use App\Http\Controllers\ViewController;
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
    return view('welcome');
});

// get route and display view
Route::get('/deepak/{num}',function($num){
    if($num == 1){
        return '<h1>Jesuraja Deepak '.$num.'</h1>';
    }elseif($num == 2){
        return '<h1>Jesuraja Deepak '.$num.'</h1>';
    } else {
        return view('test');

    }
});


// group routes
Route::prefix('gallery')->group(function(){
    Route::get('photos',function(){
        return '<h1>PHOTOS</h1>';
    });
    
    Route::get('videos',function(){
        return '<h1>Videos</h1>';
    });
    
    Route::get('documents',function(){
        return '<h1>Documents</h1>';
    });
});

// middleware
Route::get('/month/{month}',function($month){
    if($month == 1){
        return '<h1>January</h1>';
    }elseif($month == 2){
        return '<h1>February</h1>';
    } elseif($month == 3) {
        return '<h1>March</h1>';
    }
})->middleware('month');

// it is created for using blade conditional staatements
Route::get('/test',function(){
    $name = '<h1>Welcome</h1>';
    $num = 1;
    $data = ['paulraj','deepak','rani','abishake'];
    $false = 0;
    $empty = [];
    return view('test',compact('name','num','data','false','empty'));
});

// page view via controller
Route::get('/index',[ViewController::class,'index']);
