<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mensagem; 
use App\Newsletter;

class MensagemController extends Controller
{
   

    public function mensagem(Request $request)
    {
        $dadosForm = $request->all();
        $mensagem = Mensagem::create($dadosForm);
        // dd($dadosForm);
        return redirect()->route('home'); 
    }

    public function newsletter(Request $request)
    {
        $dadosForm = $request->all();
        $newsletter = Newsletter::create($dadosForm);
        // dd($dadosForm);
        return redirect()->route('home'); 
    }

    public function ver($id)
    {
        $m = Mensagem::find($id);
        return view('painel.mensagem', compact('m'));    
    }

    public function destroy($id)
    {
        $m = Mensagem::find($id);
        $m->delete();
        return redirect()->route('painel.home'); 
    }




}
