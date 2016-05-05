<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Categoria;
use App\User;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
	public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $categorias = Categoria::orderBy('id', 'desc')->get();

        return view('blog.index', compact('posts', 'categorias'));
    }

    public function show($slug)
    {
        $p = Post::findBySlug($slug);
     	$posts = Post::orderBy('id', 'desc')->get();
     	$categorias = Categoria::orderBy('id', 'desc')->get();

        return view('blog.post', compact('p', 'posts', 'categorias'));
    }

    public function busca()
    {
       	$posts = Post::orderBy('id', 'desc')->get();
        $categorias = Categoria::orderBy('id', 'desc')->get();
        $str = Input::get('str');
        $postquerys = Post::like('texto', $str)->get();
        
        return view('blog.busca', compact('categorias', 'postquerys', 'posts', 'str'));
    }

}
