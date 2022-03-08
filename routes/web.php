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






// Route::get('/user/{id}', function ($id) {
//     return 'user:' . $id;
// });


// Route::get('/user', function () {
//     return 'User System';
// });

Route::get('/posts/{post}/comment/{comment}', function ($post, $comment) {
    return 'posts:' . $post . ',comments:' . $comment;
});

Route::middleware('auth')->group(function () {
    Route::get('/user/{id?}', function ($id = 1) {
        return 'user:' . $id;
    });
});

Route::prefix('/users')->group(function () {
    Route::get('/', function () {
        return '使用者清單';
    });
    Route::get('/del', function () {
        return '刪除使用者';
    });
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'SiteController@renderHomePage')->name('index');
    Route::get('/about', 'SiteController@renderAboutPage');
    Route::get('/test', 'SiteController@doTest');
    Route::get('/gamer', 'SiteController@renderGamerPage');
    Route::get('/store', 'SiteController@renderStorePage');
    Route::get('/contact', 'SiteController@renderContactPage');
    Route::post('/contact', 'SiteController@saveContact');
});

Route::resource('item', 'App\Http\Controllers\ItemController');
//Route::apiResource('item', 'App\Http\Controllers\ItemController');

Route::get('/url', function () {
    return url()->previous();
});

//轉址的例子
Route::get('/baha', function () {
    return redirect('https://www.gamer.com.tw');
});

// Route::get('/about2', function () {
//     return redirect(url('/about'));
// });
Route::redirect('/about2', 'http://web1102.test/about', 301);
