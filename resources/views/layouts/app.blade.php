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

@yield('content')
<!-- /Contato -->
@include('includes.newsletter')
@include('includes.footer')
<!-- Modais -->
@include('includes.modal')
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