<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Palestra;
use App\Categoria;

class PalestraController extends Controller
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
        $palestras = Palestra::get();
        $palestract = Palestra::count();

        return view('painel.palestras.index', compact('palestras'));
    }
    public function show($slug)
    {
        $p = Palestra::findBySlug($slug);
     
        return view('painel.palestras.single', compact('p'));        
    }
    public function create()
    {   
      
        return view('painel.palestras.criar');
    }
    public function store(Request $request)
    {
        $dadosForm = $request->all();
        $palestrante = Palestra::create($dadosForm);
        // dd($dadosForm);
        return redirect()->route('painel.home');       
    }
    public function destroy($slug)
    {
        $p = Palestra::findBySlug($slug);
        $p->delete();

        return redirect()->route('painel.home');         
    }
}
