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

Route::get('/', function () {
    return view('welcome');
});

//AUTH ROUTES
Auth::routes();

//POSTCONTROLLER ROUTES
Route::get('/', 'PostController@homePosts')->name('homePosts');
Route::post('/myAccount', 'PostController@newPost')->name('newPost');
Route::get('/showPost/{postId}', 'PostController@showPost')->name('showPost');

//COMMENTCONTROLLER
Route::post('/postComment/{postId}', 'CommentController@postComment')->name('postComment');
Route::post('/likeComment/{postId}/{commentId}', 'CommentController@likeComment')->name('likeComment');
Route::post('/flagComment/{postId}/{commentId}', 'CommentController@flagComment')->name('flagComment');

//HOMECONTROLLER ROUTES
Route::get('/home', 'HomeController@index')->name('home');

//USERCONTROLLER ROUTES
Route::get('/myAccount', 'UserController@myAccount')->name('myAccount');
Route::get('/showUser/{userId}', 'UserController@showUser')->name('showUser');

//DESTINATIONCONTROLLER ROUTES
Route::get('/createPost', 'DestinationController@createPost')->name('createPost');
Route::get('/kleineVragen', 'DestinationController@kleineVragen')->name('kleineVragen');
Route::get('/groteVragen', 'DestinationController@groteVragen')->name('groteVragen');
Route::get('/onderdelen', 'DestinationController@onderdelen')->name('onderdelen');