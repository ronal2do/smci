<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Inscrito;
use DB;

class InscritoController extends Controller
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
     
        $users = Inscrito::get();
        return view('painel.inscritos.index', compact('users'));
    }

    public function destroy($id)
    {
        $n = Inscrito::findOrFail($id);
        $n->delete();

        return redirect()->route('news'); 
          
    }

}
