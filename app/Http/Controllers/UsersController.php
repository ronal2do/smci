<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\User;
use DB;

class UsersController extends Controller
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
     
        $users = User::get();
        $userct = User::count();

        return view('painel.users.index', compact('users'));
    }

    public function show($id)
    {
        $video = Video::findBySlug($slug);
        $videos = Video::orderBy('id', 'desc')->take(4)->get();
        $vidadm = Video::orderBy('id', 'desc')->take(4)->get();
        $mensagens = Mensagem::orderBy('id', 'desc')->take(4)->get();
        return view('users.ver', compact('video', 'videos','vidadm', 'mensagens' )); 
    }

    public function set($id)
    {
        $user = User::findOrFail($id);

        if ($user->perm == 'user') {
        DB::table('users')
            ->where('id', $id)
            ->update(['perm' => 'dom']);
        }else{
        DB::table('users')
            ->where('id', $id)
            ->update(['perm' => 'user']);
            
      	 }
		$user->save();  
        return redirect()->route('users'); 
    }
    

    public function destroy($slug)
    {
        $v = Video::findBySlug($slug);
        $v->delete();

        return redirect()->route('painel.home'); 
          
    }

}
