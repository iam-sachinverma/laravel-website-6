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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function(){
    // All the admin routes will defined here:-
    Route::match(['get','post'],'/','AdminController@login');
    Route::group(['middleware'=>['admin']],function(){

        Route::get('dashboard','AdminController@dashboard');
        Route::get('logout','AdminController@logout');
        Route::get('settings','AdminController@settings');
        Route::post('check-current-pwd','AdminController@chkCurrentPassword');
        Route::post('update-current-pwd','AdminController@updateCurrentPassword');
        Route::match(['get','post'],'update-admin-details','AdminController@updateAdminDetails');

        //QUERY
        Route::get('querys','QueryController@querys');
        
    });
});

Route::namespace('Front')->group(function(){
    //Home Page Route
    Route::get('/','IndexController@index');
    Route::post('/add-query','QueryController@queryForm');
   //Route::get('/view-query','QueryController@viewQuerys');
    Route::match(['get','post'],'/front/index','IndexController@contact');
});



