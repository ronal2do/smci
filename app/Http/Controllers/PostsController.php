<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Post;
use App\Categoria;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $posts = Post::get();
        $userct = Post::count();

        return view('painel.posts.index', compact('posts'));
    }
    public function show($slug)
    {
        $p = Post::findBySlug($slug);
     
        return view('painel.posts.single', compact('p'));        
    }
    public function create()
    {   
        $categoria = Categoria::get();
        return view('painel.posts.criar', compact('categoria'));
    }
    public function store(Request $request)
    {
        $dadosForm = $request->all();
        $post = Post::create($dadosForm);
        // dd($dadosForm);
        return redirect()->route('painel.home');       
    }
    public function destroy($slug)
    {
        $p = Post::findBySlug($slug);
        $p->delete();

        return redirect()->route('painel.home');         
    }
}
