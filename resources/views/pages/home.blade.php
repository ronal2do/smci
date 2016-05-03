@extends('layouts.app')

@section('content')
<section class="hero is-success is-bold is-fullheight">
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
                <span class="titulo-mobilidade">pela mobilidade saudável e eficiente</span>
            </div>
          </div>

         


       
        </h1>
        <div class="column" style="display: block;font-size: 1em;">
              <h1 class="title">
                <div class="is-success is-text-center">
                  <span id="semanas" class="borda"></span>
                  <span id="dias" class="borda"></span>              
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
                  <audio id="player" src="frontend/audio/desafio.m4a"></audio>
                    <a class="navbar-item" onclick="document.getElementById('player').play()">
                      <span class="icon is-icon"><i class="fa fa-audio-description"></i></span>
                    </a>
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
            <h4 class="subtitle is-4">O desafio foi lançado</h4>
            <h4 class="subtitle is-4">O I Seminário Metropolitano Cidades Inteligentes – Juntos pela mobilidade sustentável e segura vai promover dois dias de palestras e debates sobre mobilidade urbana.
            </h4>
            
            <h4 class="subtitle is-4">Serão discursões que visarão estabelecer objetivos para atingir as metas estabelecidas pela ONU sobre a redução pela metade as mortes e lesões em acidentes de trânsito até 2020.
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
                  <a class="navbar-item">
                    <span class="icon is-icon" style="color:#fff;"><i class="fa fa-audio-description"></i></span>
                  </a>
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
                          <a class="navbar-item">
                            <span class="icon is-icon" style="color:#124412;"><i class="fa fa-audio-description"></i></span>
                          </a>
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
                          <a class="navbar-item">
                            <span class="icon is-icon" style="color:#124412;"><i class="fa fa-audio-description"></i></span>
                          </a>
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
                          <a class="navbar-item">
                            <span class="icon is-icon" style="color:#124412;"><i class="fa fa-audio-description"></i></span>
                          </a>
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
                          <a class="navbar-item">
                            <span class="icon is-icon" style="color:#124412;"><i class="fa fa-audio-description"></i></span>
                          </a>
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
              <audio id="player" src="frontend/audio/desafio.m4a"></audio>
                <a class="navbar-item" onclick="document.getElementById('player').play()">
                  <span class="icon is-icon"><i class="fa fa-audio-description"></i></span>
                </a>
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
          Dia 1 - 09/06
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
                <tr>
                  <td class="is-link">
                    <a href="#">08h às 09h</a>
                  </td>
                  <td>
                    Credenciamento e Welcome Coffee
                  </td>
                  <td class="is-link is-icon">
                    
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">09h às 10h30</a>
                  </td>
                  <td>
                    <strong>Abertura</strong>
                   
                  </td>
                  <td class="is-link is-icon">
                   
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">10h30 às 11h00</a>
                  </td>
                  <td>
                  <strong>Palestra</strong><br>
                   <strong>Tema:</strong> A política de mobilidade urbana: contextualização das mudanças nas últimas 3 décadas.
                  </td>
                  <td class="is-link is-icon">
                    <a href="#">
                     Nazareno Stanislau Affonso
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">11h00 às 12h30</a>
                  </td>
                  <td><strong>Dinâmica</strong><br>
                   <strong>Tema:</strong> A política de mobilidade urbana: postura, comportamento… Trabalho de interação com os participantes do seminário para impacto da importância das políticas públicas na redução dos acidentes e o comportamento do ser humano em relação a essas políticas públicas (reações, rejeições….)
                  </td>
                  <td class="is-link is-icon">
                    <a href="#">
                      Marisa Greeb <br> Priscila Tamis
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">12h30 às 14h00</a>
                  </td>
                  <td>
                    <strong>Almoço</strong>
                  </td>
                  <td class="is-link is-icon">
                    <a href="#">
                      
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">14h às 14h30</a>
                  </td>
                  <td><strong>Apresentação dos vídeos da Mostra</strong>             
                  </td>
                  <td class="is-link is-icon">
                   
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">14h30 às 17h00</a>
                  </td>
                  <td>
                   <strong>Debate</strong><br>
                   <strong>Tema:</strong> Experiências Internacionais: mobilidade urbana e saúde<br>
                   <strong>Moderador</strong>: Heródoto Barbeiro
                  </td>
                  <td class="is-link is-icon">
                    Estados Unidos  <br>
                    França <br>
                    Colômbia  
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          Dia 2 - 10/06
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
                <tr>
                  <td class="is-link">
                    <a href="#">08h às 09h</a>
                  </td>
                  <td>
                    Credenciamento e Welcome Coffee
                  </td>
                  <td class="is-link is-icon">
                    
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">09h às 09h15</a>
                  </td>
                  <td>
                    Apresentação dos vídeos da Mostra (2 lugares de cada categoria)
                  </td>
                  <td class="is-link is-icon">
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">09h15 às 12h</a>
                  </td>
                  <td>
                  <strong>Mesa Redonda</strong><br>
                  <strong>Tema:</strong> A Construção de uma agenda coletiva da mobilidade urbana para região metropolitana de São Paulo.<br>
                 <strong>Representante das 6 regiões metropolitanas</strong><br>Capital, Guarulhos, Francisco Morato, Osasco, Taboão da Serra e ABC  e representante do Fórum Paulista e Cosems.
                  </td>
                  <td class="is-link is-icon">
                    <a href="#">
                     Vicente Trevas
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="is-link">
                    <a href="#">12h</a>
                  </td>
                  <td><strong> Recepção com os Patrocinadores</strong>
                 
                  </td>
                  <td class="is-link is-icon">
                    <a href="#">
                    </a>
                  </td>
                </tr>
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
              <audio id="player" src="frontend/audio/desafio.m4a"></audio>
                <a class="navbar-item" onclick="document.getElementById('player').play()">
                  <span class="icon is-icon" style="color:#fff;"><i class="fa fa-audio-description"></i></span>
                </a>
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
            
              <div class="box">
                        <article class="media">
                          <div class="media-left">
                            <figure class="image is-128x128">
                              <img src="http://lorempixel.com/128/128/people/3" alt="Image">
                            </figure>

                          </div>
                          <div class="media-content">
                            <div class="content">
                              <p>
                                <strong>Mme. Muriel Dubreuil</strong> <small>@johnsmith</small>
                                <br>
                               Atualmente trabalha para o “Île-de-France Region, Observatório de Saúde” (ORS), um departamento autônomo do IAU (Instituto de Planejamento e Desenvolvimento Urbano).
                              </p>
                            </div>
                          <nav class="navbar">
                          <div class="navbar-left">
                            <a class="navbar-item modal-button" data-target="#modalMme">
                              <span class="icon is-small"><i class="fa fa-eye"></i></span>
                  </a>

                          </div>
                        </nav>
                          </div>

                        </article>
              </div>
          
              <div class="box">
                  <article class="media">
                  <div class="media-left">
                    <figure class="image is-128x128">
                      <img src="http://lorempixel.com/128/128/people/6" alt="Image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong>Mrs. Porie Saikia-Eapen</strong> <small>@johnsmith</small>
                        <br>
                       Trabalha na sede do Departamento de Sustentabilidade e Comprometimento Ambiental na MTA (Metropolitan Transportation Authority), companhia responsável pelo transporte público no estado de Nova Iorque.
                      </p>
                    </div>
                  <nav class="navbar">
                  <div class="navbar-left">
                    <a class="navbar-item modal-button" data-target="#modalPorie">
                      <span class="icon is-small"><i class="fa fa-eye"></i></span>
                    </a>
                  </div>
                    </nav>
                  </div>
                  </article>
              </div>
            
              <div class="box">
                  <article class="media">
                  <div class="media-left">
                    <figure class="image is-128x128">
                      <img src="http://lorempixel.com/128/128/people/2" alt="Image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <div class="content">
                      <p>
                        <strong>Professor Heródoto Barbeiro</strong> <small>Mediador</small> 
                        <br>
                       Formado em História pela Universidade de São Paulo, onde também cursou, além da licenciatura, pós-graduação e mestrado. 
                      </p>
                    </div>
                  <nav class="navbar">
                  <div class="navbar-left">
                     <a class="navbar-item">
                    <span class="icon is-small"><i class="fa fa-eye"></i></span>
                  </a>

                  </div>
                    </nav>
                  </div>
                  </article>
              </div> 
            <br>
          </div>

          <div class="column">
            <div class="box">
              <article class="media">
                <div class="media-left">
                  <figure class="image is-128x128">
                    <img src="http://lorempixel.com/128/128/people/1" alt="Image">
                  </figure>

                </div>
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>John Smith</strong> <small>@johnsmith</small> 
                      <br>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                  </div>
                <nav class="navbar">
                <div class="navbar-left">
                   <a class="navbar-item">
                    <span class="icon is-small"><i class="fa fa-eye"></i></span>
                  </a
                </div>
              </nav>
                </div>

              </article>
            </div>
          
            <div class="box">
                <article class="media">
                <div class="media-left">
                  <figure class="image is-128x128">
                    <img src="http://lorempixel.com/128/128/people/6" alt="Image">
                  </figure>
                </div>
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>John Smith</strong> <small>@johnsmith</small> 
                      <br>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                  </div>
                <nav class="navbar">
                <div class="navbar-left">
                   <a class="navbar-item">
                    <span class="icon is-small"><i class="fa fa-eye"></i></span>
                  </a>
                </div>
                  </nav>
                </div>
                </article>
            </div>
          
            <div class="box">
                <article class="media">
                <div class="media-left">
                  <figure class="image is-128x128">
                    <img src="http://lorempixel.com/128/128/people/6" alt="Image">
                  </figure>
                </div>
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>John Smith</strong> <small>@johnsmith</small> 
                      <br>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis.
                    </p>
                  </div>
                <nav class="navbar">
                <div class="navbar-left">
                   <a class="navbar-item">
                    <span class="icon is-small"><i class="fa fa-eye"></i></span>
                  </a>
                </div>
                  </nav>
                </div>
                </article>
            </div> 
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
                  <audio id="player" src="frontend/audio/desafio.m4a"></audio>
                    <a class="navbar-item" onclick="document.getElementById('player').play()">
                      <span class="icon is-icon"><i class="fa fa-audio-description"></i></span>
                    </a>
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
                  <a class="navbar-item">
                    <span class="icon is-icon" style="color:#fff;"><i class="fa fa-audio-description"></i></span>
                  </a>
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
            
                <h4 class="subtitle is-4">Garanta a sua vaga neste grande evento. São apenas 200 vagas.</h4>
            
            </div>
          <div class="container">
            <div class="columns is-vcentered is-centered"> 
                <a class="button is-primary is-outlined is-inverted is-large modal-button" data-target="#modal2">Garanta sua vaga</a>
            </div>
           <!--  <div class="columns is-vcentered is-centered">
              <a class="button is-info is-outlined is-inverted" href="https://github.com/jgthms/bulma">
                <span class="icon">
                  <i class="fa fa-facebook-official"></i>
                </span>
                <span>entrar com facebook</span>
              </a>  
            </div> -->
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
