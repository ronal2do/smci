<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Palestrante;
use App\Categoria;

class PalestranteController extends Controller
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
        $palestrantes = Palestrante::get();
        $userct = Palestrante::count();

        return view('painel.palestrantes.index', compact('palestrantes'));
    }
    public function show($slug)
    {
        $p = Palestrante::findBySlug($slug);
     
        return view('painel.palestrantes.single', compact('p'));        
    }
    public function create()
    {   
      
        return view('painel.palestrantes.criar');
    }
    public function store(Request $request)
    {
        $dadosForm = $request->all();
        $palestrante = Palestrante::create($dadosForm);
        // dd($dadosForm);
        return redirect()->route('painel.home');       
    }
    public function destroy($id)
    {
        $p = Palestrante::findOrFail($id);
        $p->delete();

        return redirect()->route('painel.home');         
    }

    public function edit($id)
    {
        $p = Palestrante::find($id);
        // dd($p);
        return view('painel.palestrantes.editar', compact('p'));        
    }
    
    public function update($id, Request $request)
    {
        $p = Palestrante::findOrFail($id);

        $dadosForm = $request->all();

        $p->fill($dadosForm)->save();
   
        return redirect()->route('palestrantes');       
    }
}
