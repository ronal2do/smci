<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend/vendor/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">         
    <title>Seminário Municipal Cidades Inteligentes</title>
  </head>
<body>

<section class="hero is-success is-bold is-fullheight">
  <!-- Hero header: will stick at the top -->
  <div class="hero-header">
    <header class="header">
      <div class="container">
        <div class="header-left" style="padding: 5px 5px;">
         
            <h3 class="title is-2 logo-titulo--fonte">
              
                <span class="icon is-large">
                  <i class="fa fa-th-large"></i>
                </span>
                SM<strong>CI</strong>
             
            </h3>
          
        </div>
        <span id="header-toggle" class="header-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <div id="header-menu" class="header-right header-menu">
<!--      <span class="header-item">
            <a class="is-active" href="#">Inicio <span class="numero">[1]</span></a>
          </span>    -->
          <span class="header-item">
            <a href="#oquee">O que é ? <span class="numero">[1]</span></a>
          </span>      
          <span class="header-item">
            <a href="#motivo"> Objetivos <span class="numero">[2]</span></a>
          </span>        
          <span class="header-item">
            <a href="#programacao">Programação <span class="numero">[3]</span></a>
          </span>    
          <span class="header-item">
            <a href="#palestrantes">Palestrantes <span class="numero">[4]</span></a>
          </span> 
          <span class="header-item">
            <a href="#onde">Local <span class="numero">[5]</span></a>
          </span> 
          <span class="header-item">
            <a href="#contato">Contato <span class="numero">[6]</span></a>
          </span>
   <!--   <span class="header-item">
            <a href="/assistir">Assista<span class="numero">[7]</span></a>
          </span> -->
        </div>
      </div>
    </header>
  </div>
  <div class="hero-content" style="background-image: url('imagens/banner.jpg');background-size: cover;">
    <!-- Hero content: will be in the middle -->
    <div class="hero-content" style="background-image: url('imagens/tri.png');background-position: 50%; background-repeat: no-repeat;">
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
              <audio id="player" src="audio/desafio.m4a"></audio>
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
          <audio id="player" src="audio/desafio.m4a"></audio>
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
          <audio id="player" src="audio/desafio.m4a"></audio>
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
              <audio id="player" src="audio/desafio.m4a"></audio>
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
<!-- Contato -->
<section id="contato" class="section is-medium">
  <div class="container">
    <h3 class="title is-2">
      
        <span class="icon is-large">
          <i class="fa fa-phone"></i>
        </span>Contato
     
    </h3>
    <h4 class="subtitle is-4">Informações e dúvidas basta entrar em contato com a gente.</h4>
      <div class="column"> <!-- formulario de contato -->
            <div class="control is-horizontal">
            
              <div class="control is-grouped">
                <input class="input" type="text" placeholder="Nome">
                <input class="input" type="email" placeholder="Email">
              </div>
            </div>
            <div class="control is-horizontal">
             
              <div class="control">
                <div class="select is-fullwidth">
                  <select>
                    <option>Assunto</option>
                    <option>Assunto</option>
                    <option>Assunto</option>
                    <option>Assunto</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="control is-horizontal">
              
              <div class="control">
                <textarea class="textarea" placeholder="Diga como podemos ajudar"></textarea>
              </div>

            </div>
          <div class="control is-horizontal">
         
              <div class="control">
                <button class="button is-primary">Enviar</button>
              </div>
           </div>
                    <!-- mensagens -->
                     <!--   <div class="notification is-success">
                        <button class="delete"></button>
                       Mensagem enviada, breve retornaremos
                      </div>

                      <div class="notification is-danger">
                        <button class="delete"></button>
                        Erro, tente novamente
                      </div> -->
                    <!-- /mensagens -->

      </div> <!-- /formulario de contato -->

  </div>
</section>
<!-- /Contato -->

<section id="newsletter" class="hero is-primary is-bold">
  <div class="hero-content">
    <div class="container">
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup" class="columns is-vcentered is-text-left">
        <div class="column is-third is-left">
          <p class="title "> SM<strong>CI</strong> Newsletter</p>
          <p class="subtitle">Seja notificado de nossa programação</p>
        </div>

        <div class="column">
          <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
          <!-- <form action="https://bbxdesign.us3.list-manage.com/subscribe/post?u=b43b93fe633f0560b2a72a69c&amp;id=52585e8803" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate"> -->
            <div id="mc_embed_signup_scroll">
              <div class="control has-icon is-grouped">
                <input type="email" value="" name="EMAIL" class="input is-flat required email" id="mce-news" placeholder="endereço de email" required="" aria-required="true">
                <i class="fa fa-envelope"></i>
                <input type="submit" value="Assinar" name="subscribe" id="mc-embedded-subscribe" class="button is-primary is-outlined is-inverted">
              </div>
              <div id="mce-responses">
                <div class="notification is-danger response" id="mce-error-response" style="display:none"></div>
                <div class="notification is-success response" id="mce-success-response" style="display:none"></div>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_b43b93fe633f0560b2a72a69c_52585e8803" tabindex="-1" value="">
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
   <div class="row">Realização</div>
    <div class="columns">
      <div class="column is-half">
         
          <figure class="image is-half" style="max-width: 356px;">
            <img src="./imagens/realizacao.jpg">
            forum
          </figure>
     
      </div>
      <div class="column">
           <figure class="image has-text-centered" style="max-width: 149px; margin-top: 10px;">
            <img src="./imagens/antp.jpg">
            ANTP
          </figure>
  
      </div>
       <div class="column is-centered">
          <figure class="image is-centered" style="max-width: 96px;margin-top: -43px;">
            <img src="./imagens/cosems.png">
          </figure>
  
      </div>
 
    </div>
  </div>
</footer>  

<div id="modal" class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="box">
      <article class="media">
        <div class="media-left">
          <i class="fa fa-universal-access 2x"></i>
        </div>
        <div class="media-content">
          <div class="content">
            
             <h1><strong>Site acessivel</strong></h1>
            <p> Para facilitar o acesso ao site, você contará com nossos auxílios para melhor acessibilidade das informações.
            </p>
            <p>
              <audio id="audio-leitura" src="audio/audio-leitura.m4a"></audio>
                <a class="navbar-item" onclick="document.getElementById('audio-leitura').play()">
                <span class="icon is-icon"><i class="fa fa-audio-description"> </i></span>
              </a>
              <strong> Aúdio descrição</strong> 
              <br>
              Ao clicar neste ícone, você terá a narração do texto. 
            </p>
             
            

            <p>
              <a class="navbar-item cont">
                <span class="icon is-small"><i class="fa fa-low-vision"> </i></span>
              </a>
              <strong> Contraste</strong> 
              <br>
              Escurece o fundo e clareia a letra, facilitando a visibilidade.
            </p>
            <p class="texto">
                <a class="navbar-item minus">
                  <span class="icon is-small"><i class="fa fa-font">-</i></span>
                </a>
                <a class="navbar-item plus">
                  <span class="icon is-small"><i class="fa fa-font">+ </i></span>
                </a>
                <strong> Fonte ajustável</strong> 
                <br>
               Com o auxílio do - e +, você poderá aumentar ou diminuir o tamanho do texto.
            </p>

             <p>
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-keyboard-o"> </i></span>
              </a>
              <strong> Atalhos de teclado</strong> 
              <br>
              Você pode navegar pelas seções do site com as teclas numéricas do seu teclado.
            </p>
            <audio src="#"></audio>
          </div>
          
     
        </div>
      </article>
    </div>
  </div>
  <button class="modal-close"></button>
</div>

<div id="modal2" class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
      <div class="box">
        <div class="column"> <!-- formulario de contato -->
             <h4 class="subtitle is-4">Antes de assitir fale um pouco de você.</h4>
             <p>Pode usar o facebook também (-- marcação).</p>
           <br>
            <div class="control">
              
              <div class="control is-grouped">
                <input class="input" type="text" placeholder="Nome">
                <input class="input" type="email" placeholder="Email">
                  <button class="button is-primary">Enviar</button>
              </div>
            </div>
            <hr>
             <div class="columns is-vcentered is-centered">
           
                 

                  <a class="button is-success is-outlined is-inverted is-facebook" href="{{ url('redirect') }}">
                    <span class="icon">
                      <i class="fa fa-facebook-official"></i>
                    </span>
                    <span>entrar com facebook</span>
                  </a> 

                  
             
            </div>
            <!-- mensagens -->
          
        <!-- /mensagens -->

      </div> <!-- /formulario de contato -->
      </div>
  </div>
  <button class="modal-close"></button>
</div>

<div id="modalMme" class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
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
              <strong>Mme. Muriel Dubreuil</strong>
              <br>
             Atualmente trabalha para o “Île-de-France Region, Observatório de Saúde” (ORS), um departamento autônomo do IAU (Instituto de Planejamento e Desenvolvimento Urbano).
            </p>
            <p>
              Envolvida na área de saúde internacional e desde que trabalha para o ORS, se especializou em saúde e urbanismo. Ao mesmo tempo desenvolve um trabalho sobre transporte e saúde, chamado “Avaliação do Impacto na Saúde”* na mobilidade urbana, na região parisiense.
            </p>
            <p>
              Realizou um estudo em projetos de transporte urbano em Paris.
            </p>
            <p>
              Participa também do projeto do future “Grand Paris Express” Métro, que analisa as áreas desfavorecidas de Paris.
            </p>
            <p><small>*“Avaliação do Impacto na Saúde” (HIA) significa a avaliação das políticas de saúde, planos e projetos nos diversos setores econômicos, seja em técnicas quantitativas, qualitativas e participativas.</small></p>
          </div>
          <nav class="navbar">
            <div class="navbar-left">
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-reply"></i></span>
              </a>
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-retweet"></i></span>
              </a>
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
      </article>
    </div>
  </div>
  <button class="modal-close"></button>
</div>

<div id="modalPorie" class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
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
              <strong>Mrs. Porie Saikia-Eapen</strong>
              <br>
             Trabalha na sede do Departamento de Sustentabilidade e Comprometimento Ambiental na MTA (Metropolitan Transportation Authority), companhia responsável pelo transporte público no estado de Nova Iorque, abrangendo 12 condados ao sudeste Nova Iorque, juntamente com 2 condados do sudoeste do estado de Connecticut.
            </p>
            <p>
             Somando-se ao já mencionado, acumula a tarefa de contribuir com a saúde econômica da cidade, proporcionando vias menos congestionadas, navegação facilitada e mobilidade sustentável.
            </p>
            <p>
              Atualmente, a Mrs. Saikia-Eapen é representante de duas diretorias da MTA: Iniciativas Sustentáveis e Comprometimento Ambiental.
            </p>
            <p>
            Cada uma destas diretorias é liderada por um diretor responsável por desenvolver iniciativas, buscando por inovação e verificando viabilidade, supervisionando e coordenando projetos eficientes e sustentáveis e monitorando agências da MTA em suas práticas.
            </p>
           
          </div>
          <nav class="navbar">
            <div class="navbar-left">
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-reply"></i></span>
              </a>
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-retweet"></i></span>
              </a>
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
      </article>
    </div>
  </div>
  <button class="modal-close"></button>
</div>
<!-- /Modais -->
<script src="frontend/vendor/jquery/dist/jquery.min.js"></script>

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
<script>
  $(document).ready(function() {
    $('.plus').click(function() {
        $('*').css("font-size", function() {
            return parseInt($(this).css('font-size')) + 3 + 'px';
        });
    });

     $('.minus').click(function() {
        $('*').css("font-size", function() {
            return parseInt($(this).css('font-size')) - 3 + 'px';
        });
    });

    $('.cont').click(function() {
        $('*').toggleClass('contraste');
    });
  });
</script>
<script type="text/javascript">        
        $(function() {
          $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
        });
</script>
<script src="/frontend/assets/js/clipboard.min.js"></script>
<script src="/frontend/assets/js/bulma.js"></script>
<script src="/frontend/assets/js/index.js"></script>

</body>
</html>