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

<section class="section is-medium">
      <div class="container">
        <p class="subtitle is-4">
            Suas buscas por <strong>{{ $str }}</strong>
          @if ($postquerys->count() === 1)
            encontraram <strong>{{$postquerys->count()}}</strong> resultado.
          @elseif ($postquerys->count() > 1)
            encontraram <strong>{{$postquerys->count()}}</strong> resultados.
          @else
            <strong>não</strong> encontraram resultados.
            <div class="content is-medium">
                <p>Tente pesquisar por outro termo.</br>
                    Volte para a <strong><a href="">HOME</a></strong></br>
                    ou veja esta sugestão <strong><a href="">I Seminário Metropolitano Cidades Inteligentes</a></strong>.</p>      
            </div>
          @endif
        </p>
      </div>
</section>

@foreach ( $postquerys as $p)
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
          </div>
        </div>
      </div>
    </section>
  @endforeach  
@endsection