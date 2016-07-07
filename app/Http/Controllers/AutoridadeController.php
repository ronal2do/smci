<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Autoridade;
use App\Categoria;

class AutoridadeController extends Controller
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
        $autoridades = Autoridade::get();
        $userct = Autoridade::count();

        return view('painel.autoridades.index', compact('autoridades'));
    }
    public function show($slug)
    {
        $p = Autoridade::findBySlug($slug);
     
        return view('painel.autoridades.single', compact('p'));        
    }
    public function create()
    {   
      
        return view('painel.autoridades.criar');
    }
    public function store(Request $request)
    {
        $dadosForm = $request->all();        
        // dd($dadosForm);
        $autoridade = Autoridade::create($dadosForm);

        return redirect()->route('painel.home');       
    }
    public function destroy($id)
    {
        $p = Autoridade::findOrFail($id);
        $p->delete();

        return redirect()->route('painel.home');         
    }

    public function edit($id)
    {
        $p = Autoridade::find($id);
        // dd($p);
        return view('painel.autoridades.editar', compact('p'));        
    }
    
    public function update($id, Request $request)
    {
        $p = Autoridade::findOrFail($id);

        $dadosForm = $request->all();

        $p->fill($dadosForm)->save();
   
        return redirect()->route('autoridades');       
    }
}
