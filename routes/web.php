<?php

use App\Event;
use App\Http\Controllers\PostController;
use App\Post;
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
    // Route::get('/', function () {
    //     return view('welcome');
    // })->name("welcome");
    Route::get('/','PostController@index')->name('welcome');
    // Route::get('approfond/{id}', function($language,$id) {
    //     App()->setlocale($language);

    //     $posts = Post::all()->where('id',$id);
    //     //   $posts = Post::all();
    //       dd($posts->id);
    //     // $posts = $post->where('id', $post->id)->get();
    //     return view('approfond', compact('posts'));

    // })->name("approfond");

    Route::get('dorys', function () {
	    return view('dorys');
    })->name("dorys");

    Route::get('contacter', function () {

	    return view('contact_us');
    })->name("contacter");
    Route::get('/reservation/', function () {


	    return view('Reservation');
    })->name("reservation");



    Route::post('/reservation/','HomeController@store')->name('reservation.store');

    // Route::get('createTopic', 'TopicController@create')->name('topics');

     Route::get('createTopic','TopicController@show')->name('topics');
    Route::post('newsletter','NewsletterController@store')->name('newsletter.store');
    Route::get('contact-us', 'ContactController@getContact');
    Route::post('contact-us', 'ContactController@saveContact')->name('contact');


    Auth::routes();
    Route::group(['prefix' => 'profile'], function () {
        Auth::routes();
        Route::get('login', function () {
            return view('profile');
        })->name("profile");
        Route::get('createTopic', function () {

            return view('createTopic');
        })->name("topic");

        Route::post('/topic/','TopicController@store')->name('Topic.store');
    });

});

Route::get('{language}/congrè', function () {

    return view('congrè');
})->name("congrè");



//Route::post('','PostController@index')->name('welcome');

// Route::get('/auth/profile','UserController@show')->name('profile.show');

//});
Route::group(['prefix' => '{language}/approfond/'],function () {
    // Route::post('/{id}','PostController@index')->name("approfond");
      Route::Post('/{id}',function($id){
     $post = Post::all('title');
       // $post=Post::where('id',)->first();




//dd($post);
     return view('/approfond')->with(compact("post"));
     })->name("approfond");

});
Route::group(['prefix' => '{language}/avenir/'],function () {
    // Route::post('/{id}','PostController@index')->name("approfond");
      Route::Post('/{id}',function($id){
     $event= Event::all('title');
       // $post=Post::where('id',)->first();




//dd($post);
     return view('/avenir')->with(compact("event"));
     })->name("avenir");

});

Route::get('{language}/greffe_de_moelle', function () {

    return view('more.greffe_de_moelle');
})->name("moelle");
Route::get('{language}/recherches', function () {

    return view('more.recherches');
})->name("recherche");
Route::get('{language}/vivredrepa', function () {

    return view('more.vivredrepa');
})->name("vivredrepa");





