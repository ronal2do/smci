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
          <a href="#">
            1 Seminário Metropolitano Cidades Inteligentes
          </a>
        </h2>
        <div class="content is-medium">
          <p>
            O desafio foi lançado 
          </p>
          <p>
            O <strong>I Seminário Metropolitano Cidades Inteligentes</strong>  – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.
          </p>
          <p> 
            O I Seminário Metropolitano Cidades Inteligentes – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.
          </p>
          <p>
            Serão discursões que visarão estabelecer objetivos para atingir as metas estabelecidas pela ONU sobre a redução pela metade as mortes e lesões em acidentes de trânsito até 2020.
          </p>
          <p> 
            O <strong>I Seminário Metropolitano Cidades Inteligentes</strong>  – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.
          </p>
          <p>
            O I Seminário Metropolitano Cidades Inteligentes – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.
          </p>
          <p>
            Serão discursões que visarão estabelecer objetivos para atingir as metas estabelecidas pela ONU sobre a redução pela metade as mortes e lesões em acidentes de trânsito até 2020.
          </p>
          
<br>
<br>
<br>

        </div>    <a class="button is-primary"><i class="fa fa-facebook"></i> </a>  <a class="button is-primary"><i class="fa fa-twitter"></i> </a> <a class="button is-primary"><i class="fa fa-google-plus"></i> </a> 
      </div>
    </section>


@endsection