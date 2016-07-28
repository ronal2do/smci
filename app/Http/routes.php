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
	$palestrantes = \App\Palestrante::get();
	$autoridades = \App\Autoridade::orderBy('ordem', 'asc')->get();
	$palestras = \App\Palestra::get();
	$inscritos = \App\Inscrito::get();
	return view('pages.home', compact('palestrantes', 'palestras', 'inscritos', 'autoridades'));
}]);
Route::get('/inscricao',function () {
	$inscritos = \App\Inscrito::get();
	return view('pages.inscricao', compact('inscritos'));
});

Route::post('/inscricao', ['uses'=>'MensagemController@inscrito', 'as'=> 'inscricao.criar']);
Route::get('/video/{slug}', ['uses'=>'BlogController@video', 'as'=> 'video.home']);
Route::get('downloadExcel/{type}', 'MensagemController@downloadExcel');


Route::get('/privacidade',function () {
	return view('pages.privacidade');
});

Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('/callback', 	'Auth\AuthController@handleProviderCallback');
Route::auth();

Route::group(['prefix' => '/home'], function () {

	Route::get('/', ['uses'=>'HomeController@index', 'as'=> 'painel.home']);

	Route::group(['prefix' => '/video'], function () {

		Route::get('/{slug}', ['uses'=>'HomeController@video', 'as'=> 'video.ver']);
		Route::get('/{slug}/delete', 'HomeController@destroy');
		Route::get('/', 'HomeController@create');
		Route::post('/', 'HomeController@store');

	});

	Route::get('/posts', ['uses'=>'PostsController@index', 'as'=> 'posts']);
	Route::get('/posts/criar', ['uses'=>'PostsController@create', 'as'=> 'posts.criar']);
	Route::post('/posts/criar', ['uses'=>'PostsController@store', 'as'=> 'posts.store']);
	Route::get('/post/{slug}/delete', 'PostsController@destroy');

	Route::get('/palestrantes', ['uses'=>'PalestranteController@index', 'as'=> 'palestrantes']);
	Route::get('/palestrantes/criar', ['uses'=>'PalestranteController@create', 'as'=> 'palestrantes.criar']);
	Route::post('/palestrantes/criar', ['uses'=>'PalestranteController@store', 'as'=> 'palestrantes.store']);
	Route::get('/palestrante/{id}/edit', ['uses'=>'PalestranteController@edit', 'as'=> 'palestrantes.edit']);
	Route::PATCH('/palestrante/{id}/edit', ['uses'=>'PalestranteController@update', 'as'=> 'palestrantes.update']);
	Route::get('/palestrante/{slug}/delete', 'PalestranteController@destroy');

	Route::get('/autoridades', ['uses'=>'AutoridadeController@index', 'as'=> 'autoridades']);
	Route::get('/autoridades/criar', ['uses'=>'AutoridadeController@create', 'as'=> 'autoridades.criar']);
	Route::post('/autoridades/criar', ['uses'=>'AutoridadeController@store', 'as'=> 'autoridades.store']);
	Route::get('/autoridade/{id}/edit', ['uses'=>'AutoridadeController@edit', 'as'=> 'autoridades.edit']);
	Route::PATCH('/autoridade/{id}/edit', ['uses'=>'AutoridadeController@update', 'as'=> 'autoridades.update']);
	Route::get('/autoridade/{slug}/delete', 'AutoridadeController@destroy');

	Route::get('/palestras', ['uses'=>'PalestraController@index', 'as'=> 'palestras']);
	Route::get('/palestras/criar', ['uses'=>'PalestraController@create', 'as'=> 'palestras.criar']);
	Route::post('/palestras/criar', ['uses'=>'PalestraController@store', 'as'=> 'palestras.store']);
	Route::get('/palestra/{id}', ['uses'=>'PalestraController@show', 'as'=> 'palestras.show']);
	Route::get('/palestra/{id}/edit', ['uses'=>'PalestraController@edit', 'as'=> 'palestras.edit']);
	Route::PATCH('/palestra/{id}/edit', ['uses'=>'PalestraController@update', 'as'=> 'palestras.update']);
	Route::get('/palestra/{id}/delete', 'PalestraController@destroy');

	Route::get('/categorias', ['uses'=>'CategoriasController@index', 'as'=> 'categorias']);
	Route::get('/categorias/criar', ['uses'=>'CategoriasController@create', 'as'=> 'categorias.criar']);
	Route::post('/categorias/criar', ['uses'=>'CategoriasController@store', 'as'=> 'categorias.store']);
	Route::get('/categoria/{slug}/delete', 'CategoriasController@destroy');

	Route::get('/inscritos', ['uses'=>'InscritoController@index', 'as'=> 'inscritos']);
	Route::get('/inscritos/{id}/delete', 'InscritoController@destroy');

	Route::get('/newsletter', ['uses'=>'NewsletterController@index', 'as'=> 'news']);
	Route::get('/newsletter/{id}/delete', 'NewsletterController@destroy');

	Route::get('/usuarios', ['uses'=>'UsersController@index', 'as'=> 'users']);
	Route::get('/usuario/{id}', ['uses'=>'UsersController@users', 'as'=> 'users.ver']);
	Route::get('/usuario/{id}/set', ['uses'=>'UsersController@set', 'as'=> 'users.set']);
	Route::get('/usuario/{id}/delete', 'UsersController@destroy');

	Route::get('/mensagem/{id}', ['uses'=>'MensagemController@ver', 'as'=> 'mensagem.ver']);
	Route::get('/mensagem/{id}/destroy', ['uses'=>'MensagemController@destroy', 'as'=> 'mensagem.destroy']);

});

Route::post('/newsletter', 'MensagemController@newsletter');
Route::post('/mensagem', 'MensagemController@mensagem');

Route::get('/blog', ['uses'=>'BlogController@index', 'as'=>'blog']);
Route::get('/blog/post/{slug}', ['uses'=>'BlogController@show', 'as'=> 'blog.ver']);

Route::get('/blog/buscar', ['uses' => 'BlogController@busca', 'as' => 'blog.busca']);
