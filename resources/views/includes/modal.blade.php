<div id="modal" class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="box">
      <article class="media">
        <div class="media-left">
          <i class="fa fa-exclamation-circle 2x"></i>
        </div>
        <div class="media-content">
          <div class="content">
            
             <h1><strong>Comunicado.</strong></h1>
             <br>
            <p> Por motivo de força maior, o evento que aconteceria na data de hoje está suspenso. Pedimos desculpas a todos os envolvidos.
            </p>
            
            
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

