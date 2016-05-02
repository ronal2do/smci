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
        return view('pages.home');    
    }

    public function newsletter(Request $request)
    {
        $dadosForm = $request->all();
        $newsletter = Newsletter::create($dadosForm);
        // dd($dadosForm);
        return view('pages.home');    
    }




}
