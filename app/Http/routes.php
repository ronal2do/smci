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

Route::get('/',['as'=>'home' ,function () {
    return view('pages.home');
}]);

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

Route::get('/home/usuarios', ['uses'=>'UsersController@index', 'as'=> 'users']);
Route::get('/home/usuario/{id}', ['uses'=>'UsersController@users', 'as'=> 'users.ver']);
Route::get('/home/usuario/{id}/set', ['uses'=>'UsersController@set', 'as'=> 'users.set']);
Route::get('/home/usuario/{id}/delete', 'UsersController@destroy');

Route::post('/newsletter', 'MensagemController@newsletter');
Route::post('/mensagem', 'MensagemController@mensagem');

Route::get('/home/mensagem/{id}', ['uses'=>'MensagemController@ver', 'as'=> 'mensagem.ver']);
Route::get('/home/mensagem/{id}/destroy', ['uses'=>'MensagemController@destroy', 'as'=> 'mensagem.destroy']);

Route::get('/blog',['as'=>'blog' ,function () {
    return view('blog.index');
}]);

Route::get('/blog/single',['as'=>'blog.single' ,function () {
    return view('blog.single');
}]);