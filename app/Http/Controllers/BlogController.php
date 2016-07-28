<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Categoria;
use App\User;
use App\Inscrito;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Input;

use App\Video;
use App\User;

use App\Mensagem;

class BlogController extends Controller
{
    public function video($slug)
    {
        $video = Video::findBySlug($slug);
        $videos = Video::orderBy('id', 'desc')->get();
        $vidadm = Video::orderBy('id', 'desc')->get();
        // $mensagens = Mensagem::orderBy('id', 'desc')->get();
        return view('pages.video', compact('video', 'videos','vidadm'));        
    }

	public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $categorias = Categoria::orderBy('id', 'desc')->get();
        $inscritos = Inscrito::get();

        return view('blog.index', compact('posts', 'categorias', 'inscritos'));
    }

    public function show($slug)
    {
        $p = Post::findBySlug($slug);
     	$posts = Post::orderBy('id', 'desc')->get();
     	$categorias = Categoria::orderBy('id', 'desc')->get();
        $inscritos = Inscrito::get();
        return view('blog.post', compact('p', 'posts', 'categorias', 'inscritos'));
    }

    public function busca()
    {
       	$posts = Post::orderBy('id', 'desc')->get();
        $categorias = Categoria::orderBy('id', 'desc')->get();
        $str = Input::get('str');
        $postquerys = Post::like('texto', $str)->get();
        $inscritos = Inscrito::get();
        return view('blog.busca', compact('categorias', 'postquerys', 'posts', 'str', 'inscritos'));
    }

}
