<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Newsletter;
use DB;

class NewsletterController extends Controller
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
     
        $users = Newsletter::get();
        return view('painel.newsletter.index', compact('users'));
    }

    public function destroy($id)
    {
        $n = Newsletter::findOrFail($id);
        $n->delete();

        return redirect()->route('news'); 
          
    }

}
