@extends('layouts.app')

@section('content')
<section class="hero is-success is-bold">
  <div class="hero-header">
    <header class="header">
      <div class="container">
        <div class="header-left" style="padding: 5px 5px;">
         
            <h3 class="title is-2 logo-titulo--fonte">
              <a href="/">
                <span class="icon is-large">
                  <i class="fa fa-th-large"></i>
                </span>
                SM<strong>CI</strong>
             </a>
            </h3>
          
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
          11 Apr 2016
        </p>
        <h2 class="title is-2">
          <a href="/blog/single">
            I Seminário Metropolitano Cidades Inteligentes
          </a>
        </h2>
        <div class="content is-medium">
          <p>O desafio foi lançado <br>
              O <strong>I Seminário Metropolitano Cidades Inteligentes</strong>  – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.</p>
          <p>Continuar a leitura ou <a href="http://bulma.io/documentation/grid/tiles/">Compartilhar</a>!</p>
          <a class="button is-primary">Compartilhar</a></p>

        </div>
      </div>
    </section>

    <section class="section is-medium">
      <div class="container">
        <p class="subtitle is-4">
          11 Apr 2016
        </p>
        <h2 class="title is-2">
          <a href="/blog/single">
            I Seminário Metropolitano Cidades Inteligentes
          </a>
        </h2>
        <div class="content is-medium">
          <p>por <i>Ronaldo Lima</i></p>
          </div>
         <div class="content is-medium">
              O <strong>I Seminário Metropolitano Cidades Inteligentes</strong>  – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.</p>
         
          <a class="button is-primary">Compartilhar</a></p>

        </div>
      </div>
    </section>

    <section class="section is-medium">
      <div class="container">
        <p class="subtitle is-4">
          11 Apr 2016
        </p>
        <h2 class="title is-2">
          <a href="/blog/single">
            I Seminário Metropolitano Cidades Inteligentes
          </a>
        </h2>
        <div class="content is-medium">
          <p>O desafio foi lançado <br>
              O <strong>I Seminário Metropolitano Cidades Inteligentes</strong>  – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.</p>
          <p>Continuar a leitura ou <a href="http://bulma.io/documentation/grid/tiles/">Compartilhar</a>!</p>
          <a class="button is-primary">Compartilhar</a></p>

        </div>
      </div>
    </section>
    
@endsection