<?php

use App\Models\Sale;
use App\Models\Customer;
use Illuminate\Http\Request;
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

//測試用==============================================================
//用來查詢Client當前IP
Route::get('/myip', function () {
    dd(Request::getClientIp());
});

//用來測試寄信功能
Route::get('sendmail', function () {
    $data = ['name' => 'Test'];
    Mail::send('pages.notify', $data, function ($message) {
        $message->to(setting('admin.admin_mail'))->subject('This is test email');
    });
    return 'Your email has been sent successfully!';
});

//前台====================================

Route::group(['prefix' => '/demo', 'namespace' => '\App\Http\Controllers'], function () {
    Route::get('/', 'SiteController@renderHomePage');
    Route::get('/services', 'SiteController@renderServicesPage');
    Route::get('/articles/{cgy}', 'SiteController@renderCgyArticlesPage');
    Route::get('/article/{article}', 'SiteController@renderArticlePage');
    Route::get('/about', 'SiteController@renderAboutPage');
    Route::get('/contact', 'SiteController@renderContactPage');
    Route::get('/thank', 'SiteController@renderThankPage');
    Route::get('/policy', 'SiteController@renderPolicyPage');
    Route::get('/portfolio', 'SiteController@renderPortfolioPage');
    Route::get('/portfolio/{media}', 'SiteController@renderPortfolioDetailPage');
    Route::post('/save', 'SiteController@save');
});

Route::get('/', '\App\Http\Controllers\SiteController@renderWelcomePage');
Route::view('/404-page', '404-page');

//後台====================================
$middleware = ['web', 'javck.roleCheck', 'javck.verifyEnabled'];
if (Schema::hasTable('settings')) {
    if (setting('admin.useRegisterActivate') == true) {
        $middleware = ['web', 'javck.roleCheck', 'javck.verifyEnabled', 'verified'];
    }
}

Route::group(['prefix' => 'admin', 'namespace' => '\Javck\Ezlaravel\Http\Controllers', 'middleware' => $middleware], function () {
    Voyager::routes();
    Route::prefix('elements')->group(function () {
        Route::match(['delete', 'get'], 'del/{id}', 'MyVoyagerElementController@destroy')->name('voyager.elements.del');
        Route::get('copy/{id}', 'MyVoyagerElementController@copy');
    });
    Route::prefix('articles')->group(function () {
        Route::get('del/{id}', 'MyVoyagerArticleController@destroy');
        Route::get('copy/{id}', 'MyVoyagerArticleController@copy');
    });
    Route::prefix('medias')->group(function () {
        Route::get('del/{id}', 'MyVoyagerMediaController@destroy');
        Route::get('copy/{id}', 'MyVoyagerMediaController@copy');
    });
    Route::get('reset/{model}', 'MyVoyagerBaseController@reset');
});
Route::get('admin/voyager-assets', 'TCG\Voyager\Http\Controllers\VoyagerController@assets')->name('voyager.voyager_assets')->middleware(['web']);

//自定義後台路由規則
Route::group(['prefix' => 'admin', 'namespace' => '\App\Http\Controllers', 'middleware' => ['web', 'javck.roleCheck', 'javck.verifyEnabled']], function () {
});

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
    Route::get('/', 'MySiteController@renderHomePage')->name('index');
    Route::get('/about', 'MySiteController@renderAboutPage');
    Route::get('/test', 'MySiteController@doTest');
    Route::get('/gamer', 'MySiteController@renderGamerPage');
    Route::get('/store', 'MySiteController@renderStorePage');
    Route::get('/contact', 'MySiteController@renderContactPage');
    Route::post('/contact', 'MySiteController@saveContact');
    Route::get('/contact/{contact}/edit', 'MySiteController@editContactPage');
    Route::put('/contact/{contact}', 'MySiteController@updateContact');
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

Route::get('/sales/getcustomer', function () {
    $sale = Sale::find(1);
    $customer = Customer::find(2);
    $sale->customer()->associate($customer);
    $sale->save();
    dd($sale->customer);
});

Route::get('/customers/getsales', function () {
    $customer = Customer::find(1);
    $sale2 = Sale::find(2);
    $customer->sales()->save($sale2);
    dd($customer->sales);
});
