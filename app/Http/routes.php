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
	$palestras = \App\Palestra::orderBy('horario')->get();

	return view('pages.home', compact('palestrantes', 'palestras'));
}]);

Route::get('/privacidade',function () {
	return view('pages.privacidade');
});

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
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
	Route::get('/palestrante/{slug}/delete', 'PalestranteController@destroy');

	Route::get('/palestras', ['uses'=>'PalestraController@index', 'as'=> 'palestras']);
	Route::get('/palestras/criar', ['uses'=>'PalestraController@create', 'as'=> 'palestras.criar']);
	Route::post('/palestras/criar', ['uses'=>'PalestraController@store', 'as'=> 'palestras.store']);
	Route::get('/palestra/{slug}/delete', 'PalestraController@destroy');

	Route::get('/categorias', ['uses'=>'CategoriasController@index', 'as'=> 'categorias']);
	Route::get('/categorias/criar', ['uses'=>'CategoriasController@create', 'as'=> 'categorias.criar']);
	Route::post('/categorias/criar', ['uses'=>'CategoriasController@store', 'as'=> 'categorias.store']);
	Route::get('/categoria/{slug}/delete', 'CategoriasController@destroy');

	Route::get('/inscritos', ['uses'=>'NewsletterController@index', 'as'=> 'news']);
	Route::get('/inscritos/{id}/delete', 'NewsletterController@destroy');

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
