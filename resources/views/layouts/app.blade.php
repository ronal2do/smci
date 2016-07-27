<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url"                content="http://smci.com.br" />
    <meta property="og:type"               content="site" />
    <meta property="og:title"              content="Seminário Metropolitano Cidades Inteligentes" />
    <meta property="og:description"        content="I Seminário Metropolitano Cidades Inteligentes juntos pela mobilidade sustentável e segura" />
    <meta property="og:image"              content="http://smci.com.br/frontend/imagens/facebook-og.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bulma/css/bulma.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">           
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/sweetalert.css') }}">           
    <title>Seminário Metropolitano Cidades Inteligentes</title>
  </head>
<body>
<style>
  
</style>
@yield('content')
<!-- /Contato -->
@include('includes.newsletter')
@include('includes.footer')
<!-- Modais -->
<!-- /Modais -->

<script src="{{ asset('frontend/vendor/jquery/dist/jquery.min.js') }}"></script>
@yield('postscript')

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
<script src="{{ asset('frontend/assets/js/clipboard.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bulma.js') }}"></script>
<script src="{{ asset('frontend/assets/js/index.js') }}"></script>
<script src="{{ asset('frontend/assets/js/sweetalert.min.js') }}"></script>
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
</body>
</html>