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
     */
    public function index()
    {
        $video = Video::where('isfeatured', 'on')->orderBy('id', 'desc')->first();
        $videos = Video::whereNull('isfeatured')->orderBy('id', 'desc')->take(4)->get();
        $vidadm = Video::orderBy('id', 'desc')->take(4)->get();
        $vidct = Video::count();
        $userct = User::count();
        $mensagens = Mensagem::orderBy('id', 'desc')->take(4)->get();
        $newsletters = Newsletter::orderBy('id', 'desc')->take(4)->get();

        return view('painel.home', compact('video', 'videos','vidadm', 'vidct', 'userct', 'mensagens' , 'newsletters'));
    }

    public function video($slug)
    {
        $video = Video::findBySlug($slug);
        $videos = Video::whereNull('isfeatured')->orderBy('id', 'desc')->take(4)->get();
        $vidadm = Video::orderBy('id', 'desc')->take(4)->get();

        return view('painel.video', compact('video', 'videos','vidadm'));
          
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

        $video = Video::where('isfeatured', 'on')->orderBy('id', 'desc')->first();
        $videos = Video::whereNull('isfeatured')->orderBy('id', 'desc')->take(4)->get();
        $vidadm = Video::orderBy('id', 'desc')->take(4)->get();
        $userct = User::count();

        return view('painel.home', compact('video', 'videos','vidadm', 'userct'));
          
    }

    public function destroy($slug)
    {
        $v = Video::findBySlug($slug);
        $v->delete();

        $video = Video::where('isfeatured', 'on')->orderBy('id', 'desc')->first();
        $videos = Video::whereNull('isfeatured')->orderBy('id', 'desc')->take(4)->get();
        $vidadm = Video::orderBy('id', 'desc')->take(4)->get();
        $userct = User::count();

        return view('painel.home', compact('video', 'videos','vidadm', 'userct'));
          
    }

}
