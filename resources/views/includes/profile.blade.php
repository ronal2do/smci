 <div class="box">
  <article class="media">
    <div class="media-left">
      <figure class="image is-128x128">
        <!-- <img src="http://placehold.it/128?text=Sem+foto" alt="Image"> -->
        <img src="./frontend/imagens/palestrantes/{{$p->slug}}.png" alt="Image">
      </figure>

    </div>
    <div class="media-content">
      <div class="content">
        <p>
          <strong>{{ $p->name }}</strong>
          <br>
          {!!str_limit($p->resume, $limit = 160, $end = '...')!!}
        </p>
      </div>
    <nav class="navbar">
    <div class="navbar-left">
      <a class="navbar-item modal-button" data-target="#{{$p->slug}}">
        <span class="icon is-small"><i class="fa fa-plus"></i></span> Mais
    </a>
    </div>
  </nav>
    </div>

  </article>
</div>