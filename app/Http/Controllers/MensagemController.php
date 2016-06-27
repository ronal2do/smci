<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContatoRequest;
use App\Mensagem; 
use App\Newsletter;

class MensagemController extends Controller
{
   

    public function mensagem(ContatoRequest $request)
    {
        $dadosForm = $request->all();        
        //dd($dadosForm);
        $mensagem = Mensagem::create($dadosForm);

        return redirect()->route('home'); 
    }

    public function newsletter(Request $request)
    {
        $query = $request->input('email');
        $dadosForm = $request->all();
        $exists = Newsletter::where('email', $query)->first();

        if ($exists)
        {
            Newsletter::where('email', $query)
            ->update(['email' => $query]);
        }

        else
        {
          $newsletter = Newsletter::create($dadosForm);
        }

       
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
