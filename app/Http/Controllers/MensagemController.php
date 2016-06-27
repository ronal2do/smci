<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use Alert;

use App\Http\Requests\ContatoRequest;
use App\Mensagem; 
use App\Newsletter;
use App\Inscrito;

class MensagemController extends Controller
{
   

    public function mensagem(ContatoRequest $request)
    {
        $dadosForm = $request->all();        
        //dd($dadosForm);
        $mensagem = Mensagem::create($dadosForm);
            
           $email  = $input['email']; 
        Alert::success('Mensagem enviada!')->autoclose(4000);

        Mail::send('emails.welcome', [
                'email' => $email
            ], function ($m) use ($email) {
            
            $m->to($email)
              ->subject("SMCI");
        });

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

           $email  = $input['email']; 
        Alert::success('E-mail cadastrado!')->autoclose(4000);

        Mail::send('emails.welcome', [
                'email' => $email
            ], function ($m) use ($email) {
            
            $m->to($email)
              ->subject("SMCI");
        });

        // dd($dadosForm);
        return redirect()->route('home'); 
    }

    public function inscrito(Request $request)
    {
        $query = $request->input('email');
        $dadosForm = $request->all();
        $exists = Inscrito::where('email', $query)->first();

        if ($exists)
        {
            Inscrito::where('email', $query)
            ->update(['email' => $query]);
        }

        else
        {
          Inscrito::create($dadosForm);
        }
            
           $email  = $input['email']; 
        Alert::success('Cadastro efetuado enviada!')->autoclose(4000);

        Mail::send('emails.welcome', [
                'email' => $email
            ], function ($m) use ($email) {
            
            $m->to($email)
              ->subject("SMCI");
        });

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
