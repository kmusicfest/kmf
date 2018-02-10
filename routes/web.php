<?php

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

Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('gallery', 'PagesController@getGallery');
Route::get('contact', 'ContactUSController@contactUS');
Route::post('contact', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


Route::get('post', function () {
    $posts = App\Post::all();
    return view('pages.post', compact('posts'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
