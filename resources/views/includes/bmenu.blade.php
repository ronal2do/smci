<div class="container">
  <div class="notification">
   <div class="container">
        <!-- Main container -->
                <nav class="navbar">
                  <!-- Left side -->
                  <div class="navbar-left">
                    <p class="navbar-item"><a href="/blog"><strong>Home</strong></a></p>
                    @foreach ( $categorias as $c )                   
                      <p class="navbar-item"><a>{{ $c->nome}}</a></p>
                    @endforeach 
                   <!--  <p class="navbar-item"><a class="button is-success">Hot</a></p> -->
                  </div>

                  <!-- Right side -->
                  <div class="navbar-right">
                  <div class="navbar-item">
                      <p class="subtitle is-5">
                        
                            @if ($posts->count() === 1)
                                <strong>Uma</strong> postagem
                            @elseif ($posts->count() > 1)
                               <strong>{{ $posts->count() }}</strong>  posts
                            @else
                              <strong>Nenhuma</strong> postagem
                            @endif
                      </p>
                    </div>
                    <div class="navbar-item">
                      <form action="{{ route('blog.busca') }}" class="control has-addons">
                        <input class="input" type="text" placeholder="Buscar por..." name="str">
                        <button type="submit" class="button">
                          Buscar
                        </button>
                      </form>
                    </div>
                  </div>

                
                </nav>
         </div>
  </div>
</div>

