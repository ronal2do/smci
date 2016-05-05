<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Categoria;

class CategoriasController extends Controller
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
        $categorias = Categoria::get();

        return view('painel.categorias.index', compact('categorias'));
    }
    public function show($slug)
    {     
        return view('painel.categorias.single');        
    }
    public function create()
    {   
        $categoria = Categoria::get();
        return view('painel.categorias.criar', compact('categoria'));
    }
    public function store(Request $request)
    {
        $dadosForm = $request->all();
        $post = Categoria::create($dadosForm);
        // dd($dadosForm);
        return redirect()->route('painel.home');       
    }
    public function destroy($slug)
    {
        $c = Categoria::findBySlug($slug);
        $c->delete();

        return redirect()->route('painel.home');         
    }
}
