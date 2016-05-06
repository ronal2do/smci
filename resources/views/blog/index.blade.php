@extends('layouts.app')

@section('content')
<section class="hero is-success is-bold">
  <div class="hero-header">
    <header class="header">
      <div class="container">
        <div class="header-left" style="padding: 5px 5px;">
         
              @include('includes.logo')
          
        </div>
        <span id="header-toggle" class="header-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        @include('includes.menu')
      </div>
    </header>
  </div>
  <div class="hero-content" id="banner">
    <!-- Hero content: will be in the middle -->
    
      <div class="container" >
        <br>
        <br>
        <br>
       
      </div>
 
  </div>
</section>

@include('includes.bmenu')
  
@forelse ( $posts as $p)
    <section class="section is-medium">
      <div class="container">
         <div class="container">
        <p class="subtitle is-4">
           {{ $p->created_at->format('d.m.Y') }} <small>- {{ $p->created_at->diffForHumans() }}</small> 
        </p>
        <h2 class="title is-2">
          <a href="/blog/post/{{ $p->slug }}">
            {{ $p->titulo }}
          </a>
        </h2>
        <div class="content is-medium">
         <p>{!! str_limit($p->texto, $limit = 95, $end = ' ... ') !!}</p>
           <a class="button is-primary">Compartilhar</a>
        </div>
         

        </div>
      </div>
    </section>
    @empty
     <section class="section is-medium">
      <div class="container">
        <p class="subtitle is-4">
          Dia XX e XX de Julho
        </p>
        <h2 class="title is-2">
          <a href="">
            I Seminário Metropolitano Cidades Inteligentes
          </a>
        </h2>
        <div class="content is-medium">
          <p>O desafio foi lançado <br>
              O <strong>I Seminário Metropolitano Cidades Inteligentes</strong>  – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.</p>
  

        </div>
      </div>
    </section>
  @endforelse  
@endsection