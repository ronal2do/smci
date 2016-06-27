@extends('layouts.app')

@section('content')
<section class="hero is-success is-bold is-fullheight">
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
    <div class="hero-content" id="tri">
      <div class="container" >
        <h1 class="title">
        <br>
            <br>
           <div class="column">
            <div class="is-success is-text-center">
                <br class="is-hidden-touch">
                <br class="is-hidden-touch"> 
                <br class="is-hidden-touch">
                <span class="titulo-seminario">I Seminário Metropolitano Cidades Inteligentes</span><br>
                <span class="titulo-juntos"> JUNTOS </span><br>
                <span class="titulo-mobilidade">Pela mobilidade sustentável e segura</span>
            </div>
          </div>
   
        </h1>
        <div class="column" style="display: block;font-size: 1em;">
              <h1 class="title">
                <div class="is-success is-text-center">
                  <span id="dias" class="borda">Dia 28 e 29 de Julho</span>              
                  <span id="horas" class="borda"></span>
                  <span id="minutos" class="borda is-hidden-touch"></span>
                  <span id="segundos" class="borda is-hidden-touch"></span>
              </div>
              </h1>
            </div>
      </div>
    </div>
  </div>
</section>
    <section id="oquee" class="section is-medium">
      <div class="container">
        <h3 class="title is-2">
            <span class="icon is-large">
              <i class="fa fa-lightbulb-o"></i>
            </span>
            I <strong>Seminário</strong> Metropolitano Cidades Inteligentes 
          </h3>
              <nav class="navbar">
                  <div class="navbar-left">

                    
                   <a class="navbar-item minus">
                    <span class="icon is-small"><i class="fa fa-font">-</i></span>
                  </a>
                  <a class="navbar-item plus">
                    <span class="icon is-small"><i class="fa fa-font">+ </i></span>
                  </a>
                    <a class="navbar-item cont">
                      <span class="icon is-small"><i class="fa fa-low-vision"></i></span>
                    </a>
                     
                  </div>
              </nav>

         <div class="texto-tamanho">
            <h4 class="subtitle is-4">O Seminário Metropolitano “Cidades Inteligentes – Juntos pela mobilidade sustentável e segura” é um evento de caráter técnico e institucional sobre mobilidade e saúde.</h4>
            <h4 class="subtitle is-4">Serão dois dias de debates, troca de experiências e de informações com foco no transporte público, modais não motorizados, que inclui ciclistas e pedestres, e no meio ambiente, priorizando os diversos impactos na saúde pública. 
            </h4>
            
            <h4 class="subtitle is-4"> O Seminário busca, fundamentalmente, estabelecer objetivos adequados à realidade da Região Metropolitana de São Paulo, capazes de efetivamente contribuir para o alcance das metas estabelecidas pela ONU que visam à redução de acidentes com vítimas fatais.
            </h4>

            <h4 class="subtitle is-4">O propósito é envolver os diversos setores da sociedade no compromisso em trilhar caminhos mais sustentáveis, seguros e adequados dentro da perspectiva de reversão do panorama atual. 
            </h4>

            <h4 class="subtitle is-4">O desafio está lançado. 
            </h4>

            <h4 class="subtitle is-4">Venha fazer parte desse movimento por mobilidade sustentável e segura.  <br>Esperamos por você.
            </h4>
         </div>
            <br><br>  
    </section>

    <section id="motivo" class="hero is-medium is-primary is-bold">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-text-left">
            <h3 class="title is-2">
             <br>
                <span class="icon is-large">
                  <i class="fa fa-cubes"></i>
                </span>Objetivos
             
            </h3>
            <nav class="navbar">
                <div class="navbar-left">
                 
                  <a class="navbar-item minus">
                    <span class="icon is-small" style="color:#fff;"><i class="fa fa-font">-</i></span>
                  </a>
                  <a class="navbar-item plus">
                    <span class="icon is-small" style="color:#fff;"><i class="fa fa-font">+ </i></span>
                  </a>
                  <a class="navbar-item cont">
                    <span class="icon is-small" style="color:#fff;"><i class="fa fa-low-vision"></i></span>
                  </a>
                   
                </div>
              </nav>
            
            <div class="">
              <h4 class="subtitle is-4 texto-tamanho">Estabelecemos 4 grandes objetivos para direcionar nossos debates e discursões, facilitando a concretização das metas.</h4>
            </div>
               
            <br>
          </div>
          
        </div>
          <div id="grid" class="columns">
                  <div class="column" style="display: block;">
                    <div class="box is-success is-text-left">
                        <h3> <nav class="navbar">
                        <div class="navbar-left">
                         
                          <a class="navbar-item minus">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-font">-</i></span>
                          </a>
                          <a class="navbar-item plus">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-font">+ </i></span>
                          </a>
                          <a class="navbar-item cont">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-low-vision"></i></span>
                          </a>
                           
                        </div>
                      </nav></h3>
                         Entender o comportamento dos paulistas no seu modo de se relacionar com a mobilidade urbana, em especial: na utilização do cinto de segurança, rodízio, corredores e faixas exclusivas de ônibus, ciclovias, ruas de lazer, redução da velocidade nas vias e multas de trânsito.
                        
                    </div>
                  </div>
                 <!--  <div class="column" style="display: block;">
                    <div class="box is-info is-text-centered">
                      <p class="title">Foto</p>
                    </div>
                  </div> -->
                  <div class="column" style="display: block;">
                    <div class="box is-success is-text-left">
                      <h3><nav class="navbar">
                        <div class="navbar-left">
                         
                          <a class="navbar-item minus">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-font">-</i></span>
                          </a>
                          <a class="navbar-item plus">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-font">+ </i></span>
                          </a>
                          <a class="navbar-item cont">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-low-vision"></i></span>
                          </a>
                           
                        </div>
                      </nav></h3>
                       Revelar experiências bem-sucedidas na priorização do transporte público e no incentivo ao uso do transporte não motorizado, como a bicicleta. Como garantir a segurança do pedestre e de cidadãos com deficiência de locomoção (cadeirantes, deficientes visuais).
                    </div>
                  </div>
          </div>  
          <div id="grid" class="columns">
                  <div class="column" style="display: block;">
                    <div class="box is-success is-text-left">
                        <h3><nav class="navbar">
                        <div class="navbar-left">
                         
                          <a class="navbar-item minus">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-font">-</i></span>
                          </a>
                          <a class="navbar-item plus">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-font">+ </i></span>
                          </a>
                          <a class="navbar-item cont">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-low-vision"></i></span>
                          </a>
                        </div>
                      </nav></h3>
                          Incorporar iniciativas nos programas de governo e nas políticas públicas municipais de mobilidade urbana e de saúde pública que atendam às definições estabelecidas pela ONU para toda a Região Metropolitana de São Paulo.
                    </div>
                  </div>
                 <!--  <div class="column" style="display: block;">
                    <div class="box is-info is-text-centered">
                      <p class="title">Foto</p>
                    </div>
                  </div> -->
                  <div class="column" style="display: block;">
                    <div class="box is-success is-text-left">
                      <h3><nav class="navbar">
                        <div class="navbar-left">
                         
                          <a class="navbar-item minus">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-font">-</i></span>
                          </a>
                          <a class="navbar-item plus">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-font">+ </i></span>
                          </a>
                          <a class="navbar-item cont">
                            <span class="icon is-small" style="color:#124412;"><i class="fa fa-low-vision"></i></span>
                          </a>
                           
                        </div>
                      </nav></h3>
                         Ampliar canais para comunicar com transparência as informações, a participação social e a consolidação de parcerias.
                       
                    </div>
                  </div>
          </div>
     <br>
      </div> 
    </section>

    <section id="programacao" class="section is-medium">
      <div class="container">
        <h3 class="title is-2">
            <span class="icon is-large">
              <i class="fa fa-lightbulb-o"></i>
            </span>Programação
          </h3>
          <nav class="navbar">
              <div class="navbar-left">
               
               <a class="navbar-item minus">
                <span class="icon is-small"><i class="fa fa-font">-</i></span>
              </a>
              <a class="navbar-item plus">
                <span class="icon is-small"><i class="fa fa-font">+ </i></span>
              </a>
                <a class="navbar-item cont">
                  <span class="icon is-small"><i class="fa fa-low-vision"></i></span>
                </a>
                 
              </div>
          </nav>
          Dia 1 - 28/07
          <div class="example">
            <table class="table is-bordered is-striped">
              <thead>
                <tr>
                  <th width="150px">Horário</th>
                  <th>Palestra</th>
                  <th width="200px">Palestrante</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="150px">Horário</th>
                  <th>Palestra</th>
                  <th width="200px">Palestrante</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($palestras as $p)
                  @if ($p->dia == 1)
                      <tr>
                        <td class="is-link">
                          <a href="#">{{$p->horario}}</a>
                        </td>
                        <td>
                         {!! $p->palestra !!}
                        </td>
                        <td class="is-link is-icon">
                          {!! $p->mediador !!}
                        </td>
                      </tr>
                  @endif
               @endforeach
               
              </tbody>
            </table>
          </div>
          Dia 2 - 29/07
          <div class="example">
            <table class="table is-bordered is-striped">
              <thead>
                <tr>
                  <th width="150px">Horário</th>
                  <th>Palestra</th>
                  <th width="200px">Mediador</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="150px">Horário</th>
                  <th>Palestra</th>
                  <th width="200px">Mediador</th>
                </tr>
              </tfoot>
              <tbody>
               @foreach($palestras as $p)
                      @if ($p->dia == 2)
                          <tr>
                            <td class="is-link">
                              <a href="#">{{ $p->horario }}</a>
                            </td>
                            <td>
                             {!! $p->palestra !!}
                            </td>
                            <td class="is-link is-icon">
                              {!! $p->mediador !!}
                            </td>
                          </tr>
                      @endif
                   @endforeach
              </tbody>
            </table>
          </div>
      </div>    
    </section>

    <section id="palestrantes" class="hero is-medium is-primary is-bold">
      <div class="container">
      <h3 class="title is-2  is-text-left">
             <br>
                <span class="icon is-large">
                  <i class="fa fa-cubes"></i>
                </span>
                Palestrantes

            </h3>
         <nav class="navbar">
              <div class="navbar-left">
             
               <a class="navbar-item minus">
                <span class="icon is-small" style="color:#fff;"><i class="fa fa-font">-</i></span>
              </a>
              <a class="navbar-item plus">
                <span class="icon is-small" style="color:#fff;"><i class="fa fa-font">+ </i></span>
              </a>
                <a class="navbar-item cont">
                  <span class="icon is-small" style="color:#fff;"><i class="fa fa-low-vision"></i></span>
                </a>
                 
              </div>
          </nav>
            <h4 class="subtitle is-4  is-text-left">Contaremos com a presença de ilustres palestrantes que irão ministrar discussões e debates para o aprimoramento do tema.</h4>
           
        <div class="columns is-vcentered">
          <div class="column is-text-left">
         
            @foreach ($palestrantes as $p)
              @if ($p->id % 2 == 0)
              @include('includes.profile')
             @else
             @endif 
           @endforeach

            <br>

          </div>

          <div class="column">
           @foreach ($palestrantes as $p)
              @if ($p->id % 2 !== 0)
                @include('includes.profile')
              @else
             @endif 
           @endforeach      
               <br>  
          </div>

          
        </div>
        
      </div>
    </section>
    <!-- Modais -->
    <section id="onde" class="section is-medium is-primary is-bold">
      <div class="container">
      <h3 class="title is-2">
         
            <span class="icon is-large"><i class="fa fa-map-marker"></i>
            </span>Local <strong> </strong>
       
        </h3>
         <nav class="navbar">
                  <div class="navbar-left">
               
                   <a class="navbar-item minus">
                    <span class="icon is-small"><i class="fa fa-font">-</i></span>
                  </a>
                  <a class="navbar-item plus">
                    <span class="icon is-small"><i class="fa fa-font">+ </i></span>
                  </a>
                    <a class="navbar-item cont">
                      <span class="icon is-small"><i class="fa fa-low-vision"></i></span>
                    </a>
                     
                  </div>
              </nav>
        <div class="container">
          <div class="columns is-vcentered is-centered">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.7485599400525!2d-46.52117728397557!3d-23.469532564094852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5559dd1c675%3A0xe357636ecfa7ad06!2sAdamastor+Centro!5e0!3m2!1spt-BR!2sus!4v1461602501825" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
          
        </div>
        
      </div>
    </section>

    <section id="inscreva-se" class="hero is-medium is-primary is-bold is-text-left" style="padding: 40px 20px;">
      <div class="container is-text-left" >
        <h3 class="title is-2">
        
            <span class="icon is-large">
              <i class="fa fa-user-plus"></i>
            </span>
            Inscrições <strong></strong>
            
        </h3>
            <nav class="navbar">
                <div class="navbar-left">
                 
                  <a class="navbar-item minus">
                    <span class="icon is-small" style="color:#fff;"><i class="fa fa-font">-</i></span>
                  </a>
                  <a class="navbar-item plus">
                    <span class="icon is-small" style="color:#fff;"><i class="fa fa-font">+ </i></span>
                  </a>
                  <a class="navbar-item cont">
                    <span class="icon is-small" style="color:#fff;"><i class="fa fa-low-vision"></i></span>
                  </a>  
                </div>
            </nav>
           <div class="columns">
            <div class="column is-half">
            
                <h4 class="subtitle is-4">Garanta a sua vaga neste grande evento.</h4>
            
            </div>
          <div class="container">
            <div class="columns is-vcentered is-centered"> 
            @if( $inscritos->count() < 400 )
                    <a class="button is-primary is-outlined is-inverted is-large" href="inscricao">Garanta sua vaga</a>
              @else
                <a class="button is-primary is-outlined is-inverted is-large" disabled>Inscrições encerradas</a>
            @endif
            </div>
          
          </div>
          </div>
        </div>
    </section>
  
@include('includes.contato')
@include('includes.modal')

@endsection

@section('postscript')
<script>
  var end = new Date('07/09/2016 10:10 AM');
      var _second = 1000;
      var _minute = _second * 60;
      var _hour = _minute * 60;
      var _day = _hour * 24;
      var timer;
      function showRemaining() {
          var now = new Date();
          var distance = end - now;
          if (distance < 0) {
              clearInterval(timer);
              document.getElementById('countdown').innerHTML = 'EVENTO EM ANDAMENTO!';
              return;
          }
          var days = Math.floor(distance / _day);
          var hours = Math.floor((distance % _day) / _hour);
          var minutes = Math.floor((distance % _hour) / _minute);
          var seconds = Math.floor((distance % _minute) / _second);
          document.getElementById('dias').innerHTML = days + ' dias ';
          document.getElementById('horas').innerHTML = hours + ' hrs ';
          document.getElementById('minutos').innerHTML = minutes + ' mins ';
          document.getElementById('segundos').innerHTML = seconds + ' segs';
      }
      timer = setInterval(showRemaining, 1000);
</script>
@endsection
