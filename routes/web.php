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





 Route::redirect('/', '/fr');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => '{language}'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name("welcome");
    Route::get('dorys', function () {
	    return view('dorys');
    })->name("dorys");
     Route::get('congrè', function () {
	    return view('congrè');
    })->name("congrè");
    Auth::routes();
    Route::group(['prefix' => 'profile'], function () {
        Auth::routes();
        Route::get('login', function () {
            return view('profile');
        })->name("profile");
    });


});

/*Route::get('/auth/profile','UserController@show')->name('profile.show');

});






