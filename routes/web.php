<?php

use App\Models\User;
use App\Models\Office;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('/store', '\App\Http\Controllers\SiteController@renderStorePage');
Route::view('/404-page', '404-page');

Route::get('auth_check', function () {
    $result = Auth::check();
    return $result;
});

Route::get('auth_data', function () {
    $result = Auth::id();
    return $result;
})->middleware('auth.basic');

Route::get('mylogin', function () {
    $user = User::first();
    Auth::loginUsingId($user->id);
});

Route::get('mylogout', function () {
    Auth::logout();
})->middleware('auth');

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

Route::get('contacts/create', 'App\Http\Controllers\MySiteController@renderContactPage');

Route::get('pluck_demo', function () {
    $suppliers = Supplier::pluck('name', 'id');
    dd($suppliers);
});

Route::view('/menu/demo', 'menu.frontend');

Route::get('/offices/del/{office}', function (Office $office) {
    $office->delete();
    return '刪除成功';
});

Route::get('/offices', function () {
    dd(Office::count());
});
