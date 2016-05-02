<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/privacidade',function () {
    return view('pages.privacidade');
});

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
Route::auth();

Route::get('/home', ['uses'=>'HomeController@index', 'as'=> 'painel.home']);
Route::get('/home/video/{slug}', ['uses'=>'HomeController@video', 'as'=> 'video.ver']);
Route::get('/home/video/{slug}/delete', 'HomeController@destroy');
Route::get('/home/video', 'HomeController@create');
Route::post('/home/video', 'HomeController@store');

Route::post('/newsletter', 'MensagemController@newsletter');
Route::post('/mensagem', 'MensagemController@mensagem');
