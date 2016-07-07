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

    <section class="section is-medium">
      <div class="container">
         <div class="container">
            
               @if( $inscritos->count() < 400 )
            <p class="subtitle is-4">
            Formulário
            </p>
               {!! Form::open(array('url' => '/inscricao')) !!}
                  <div class="content is-medium">
                      <div class="control is-horizontal">
                          <p class="control has-icon has-icon-right">
                              <input class="input" type="text" placeholder="Nome completo" name="nome">
                          </p>
                      </div>

                      <div class="control is-horizontal">
                        <div class="control is-grouped">
                          <input class="input" type="email" placeholder="Email" name="email">
                          <input class="input" type="text" placeholder="Telefone com DDD" name="telefone">
                        </div>
                      </div>
                
                  
                      <div class="control is-horizontal">
                        <div class="control is-grouped">
                          <input class="input" type="text" placeholder="Profissão" name="profissao">
                          <input class="input" type="text" placeholder="Cidade" name="cidade">
                        </div>
                      </div>
                
                
                  <p class="control">
                    <textarea class="textarea" name="como" placeholder="Como ficou sabendo do seminário?"></textarea>
                  </p>

                  <p class="control">
                    <button type="submit" class="button is-primary">Enviar</button>
                    
                  </p>
              </div>
             {!! Form::close() !!} 
             @else
               <p class="subtitle is-4">
            Inscrições encerradas
            </p>
            @endif
           
        </div>
      </div>
    </section>

@endsection