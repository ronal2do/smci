<style>
  .tabs-item{display: none;}
  .tabs-item.is-active{display: block;}
</style>

<div id="header-menu" class="header-right header-menu">
        <!--      <span class="header-item">
            <a class="is-active" href="#">Inicio</a>
          </span>    -->
          <span class="header-item">
            <a href="/#oquee">O que é ?</a>
          </span>      
          <span class="header-item">
            <a href="/#motivo"> Objetivos</a>
          </span>        
          <span class="header-item">
            <a href="/#programacao">Programação</a>
          </span>    
          <span class="header-item">
            <a href="/#palestrantes">Participantes</a>
          </span> 
          <span class="header-item">
            <a href="/#onde">Local</a>
          </span> 
          <span class="header-item">
            <a href="/#contato">Contato</a>
          </span>
        <!--   <span class="header-item">
            <a data-target="#modal2" class="modal-button">Assista<span class="numero">[7]</span></a>
          </span> -->
          <span class="header-item">
         @if( $inscritos->count() < 357)
          <a class="button is-info is-outlined is-inverted" href="/inscricao">
          
          <!--   <span class="icon">
              <i class="fa fa-commenting-o"></i>
            </span> -->
            <span>Inscrição</span>
          </a>
          @endif
          <a class="button is-info is-outlined is-inverted" href="/blog">
          <!--   <span class="icon">
              <i class="fa fa-commenting-o"></i>
            </span> -->
            <span>Blog</span>
          </a>
          <a data-target="#modal2" class="modal-button button is-info is-outlined is-inverted" data-social-network="Twitter" data-social-action="tweet">
          <!--   <span class="icon">
              <i class="fa fa-twitter"></i>
            </span> -->
            <span>Assista</span>
          </a>

        </span>
</div>


<div id="modal2" class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
      <div class="box">
        <div class="column"> <!-- formulario de contato -->
             <h4 class="subtitle is-4" style="color:#69707a;text-align: left;">Acompanhe ao vivo a transmissão online do nosso seminário.</h4>
  <!-- tabs  -->
            <div id="tabs">
               <div class="tabs is-toggle is-fullwidth">
                <ul>
                  <li class="seletor">
                    <a href="#tabs-1">
                      <span class="icon is-small"><i class="fa fa-user-plus"></i></span>
                      <span>Registrar</span>
                    </a>
                  </li>
                  <li class="seletor">
                    <a href="#tabs-2">
                      <span class="icon is-small"><i class="fa fa-sign-in"></i></span>
                      <span>Logar</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="tabs-containner">
                 <div id="tabs-2" class="tabs-item is-active">
                   @include('includes.logar')
                 </div>
                 <!-- /.tabs-item -->
                 <div id="tabs-1" class="tabs-item">
                   @include('includes.registrar')
                 </div>
                 <!-- /.tabs-item -->
              </div>
            </div>
<!-- tabs -->
        <hr>
           <div class="columns is-vcentered is-centered">
         
                <a class="button is-success is-outlined is-inverted is-facebook" href="http://smci.com.br/auth/facebook">
                  <span class="icon">
                    <i class="fa fa-facebook-official"></i>
                  </span>
                  <span>entrar com facebook</span>
                </a> 

          </div>
            <!-- mensagens -->
          
        <!-- /mensagens -->

      </div> <!-- /formulario de contato .addClass("is-active")-->
      </div>
  </div>
  <button class="modal-close"></button>
</div>
@section('postscript')
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
    $( "#tabs" ).tabs();
  });
</script>
@endsection
