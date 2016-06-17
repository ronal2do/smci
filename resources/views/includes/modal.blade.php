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
            <!-- <p>
              <audio id="audio-leitura" src="frontend/audio/audio-leitura.m4a"></audio>
                <a class="navbar-item" onclick="document.getElementById('audio-leitura').play()">
                <span class="icon is-icon"><i class="fa fa-audio-description"> </i></span>
              </a>
              <strong> Aúdio descrição</strong> 
              <br>
              Ao clicar neste ícone, você terá a narração do texto. 
            </p> -->
             
            

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

            <!--  <p>
              <a class="navbar-item">
                <span class="icon is-small"><i class="fa fa-keyboard-o"> </i></span>
              </a>
              <strong> Atalhos de teclado</strong> 
              <br>
              Você pode navegar pelas seções do site com as teclas numéricas do seu teclado.
            </p> -->
            <audio src="#"></audio>
          </div>
          
     
        </div>
      </article>
    </div>
  </div>
  <button class="modal-close"></button>
</div>

@foreach ($palestrantes as $p)
<div id="{{$p->slug}}" class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="box">
      <article class="media">
       <!--  <div class="media-left">
          <figure class="image is-128x128">
            <img src="http://lorempixel.com/128/128/people/3" alt="Image">
          </figure>
        </div> -->
        <div class="media-content">
          <div class="content">
            
              <strong>{{ $p->name }}</strong>
              <br>
            {!! $p->resume !!}
          </div>
         <!--  <nav class="navbar">
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
          </nav> -->
        </div>
      </article>
    </div>
  </div>
  <button class="modal-close"></button>
</div>
@endforeach

