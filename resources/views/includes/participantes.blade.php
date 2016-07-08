
    <section id="palestrantes" class="hero is-medium is-primary is-bold">
      <div class="container">
          <h3 class="title is-2  is-text-left">
             <br>
                <span class="icon is-large">
                  <i class="fa fa-cubes"></i>
                </span>
                Participantes
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
            <br>
          @include('includes.abertura')
          @include('includes.palestrantes')
          @include('includes.encerramento')
        
      </div>
    </section>
