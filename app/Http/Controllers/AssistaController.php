<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AssistaController extends Controller
{
    public function video($slug)
    {
     	$inscritos = \App\Inscrito::get();
		$video = \App\Video::findBySlug($slug);
		$videos = \App\Video::orderBy('id', 'asc')->get();
		return view('pages.video', compact('videos', 'video','inscritos')); 
    }

}
