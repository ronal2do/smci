<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Video;

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
        $video = Video::where('isfeatured', true)->orderBy('id', 'desc')->first();
        $videos = Video::where('isfeatured', false)->orderBy('id', 'desc')->take(4)->get();
        return view('painel.home', compact('video', 'videos'));
          
    }

    public function video($slug)
    {
        $video = Video::findBySlug($slug);

        $videos = Video::where('isfeatured', false)->orderBy('id', 'desc')->take(4)->get();

        return view('painel.video', compact('video', 'videos'));
          
    }
    public function create()
    {
        return view('painel.criar-v');
          
    }
    public function store(Request $request)
    {
        $dadosForm = $request->all();

        $post = Video::create($dadosForm);

        $video = Video::where('isfeatured', true)->orderBy('id', 'desc')->first();
        $videos = Video::where('isfeatured', false)->orderBy('id', 'desc')->take(4)->get();
        
     

        return view('painel.home', compact('video', 'videos'));
          
    }
}
