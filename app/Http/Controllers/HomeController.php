<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Video;
use App\User;
use App\Mensagem;
use App\Newsletter;
use App\Post;
use App\Categoria;
use App\Palestra;
use App\Palestrante;

class HomeController extends Controller
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

     * $videos = Video::whereNull('isfeatured')->orderBy('id', 'desc')->take(4)->get();
     */
    public function index()
    {
        $video = Video::where('isfeatured', 'on')->orderBy('id', 'desc')->first();
        $videos = Video::orderBy('id', 'desc')->take(4)->get();
        $categorias = Categoria::orderBy('id', 'desc')->get();
        $vidct = Video::count();
        $userct = User::count();
        $mensagens = Mensagem::orderBy('id', 'desc')->take(4)->get();
        $posts = Post::orderBy('id', 'desc')->get();
        $palestract = Palestra::count();
        $palestrantect = Palestrante::count();
        
        $newsletters = Newsletter::orderBy('id', 'desc')->take(4)->get();

        return view('painel.home', compact('video', 'videos','categorias', 'vidct', 'userct', 'mensagens' , 'newsletters', 'posts', 'palestract', 'palestrantect'));
    }

    public function video($slug)
    {
        $video = Video::findBySlug($slug);
        $videos = Video::orderBy('id', 'desc')->take(4)->get();
        $vidadm = Video::orderBy('id', 'desc')->take(4)->get();
        $mensagens = Mensagem::orderBy('id', 'desc')->take(4)->get();
        return view('painel.video', compact('video', 'videos','vidadm', 'mensagens' ));
          
    }
    public function create()
    {
        return view('painel.criar-v');     
    }

    public function store(Request $request)
    {
        $dadosForm = $request->all();
        $post = Video::create($dadosForm);
        // dd($dadosForm);
        return redirect()->route('painel.home'); 
          
    }

    public function destroy($slug)
    {
        $v = Video::findBySlug($slug);
        $v->delete();

        return redirect()->route('painel.home'); 
          
    }

}
