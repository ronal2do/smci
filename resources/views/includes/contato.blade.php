  <!-- Contato -->
    <section id="contato" class="section is-medium">
      <div class="container">
        <h3 class="title is-2">
          
            <span class="icon is-large">
              <i class="fa fa-phone"></i>
            </span>Contato
         
        </h3>
        <h4 class="subtitle is-4">Informações e dúvidas basta entrar em contato com a gente.</h4>
                  @unless($errors->isEmpty())
                      <ul style="color:#C55A5A;">
                      @foreach($errors->getMessages() as $error)
                          <li>{{ $error[0] }}</li>
                      @endforeach
                      </ul>
                  @endunless

          <div class="column"> <!-- formulario de contato -->
           {!! Form::open(array('url' => '/mensagem')) !!}

                <div class="control is-horizontal">
                
                  <div class="control is-grouped">
                    <input class="input" type="text" placeholder="Nome" name="nome">
                    <input class="input" type="email" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="control is-horizontal">
                 
                  <div class="control">
                    <div class="select is-fullwidth">
                      <select class="select" name="assunto">
                        <option value="Inscrição">Inscrição</option>
                        <option value="Assistir">Assistir</option>
                        <option value="Palestrante">Palestrante</option>
                        <option value="Staff">Staff</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="control is-horizontal">
                  
                  <div class="control">
                    <textarea class="textarea" name="mensagem" placeholder="Diga como podemos ajudar"></textarea>
                  </div>

                </div>
              <div class="control is-horizontal">
             
                  <div class="control">
                    <button class="button is-primary">Enviar</button>
                  </div>
               </div>
                {!! Form::close() !!} 
          </div> <!-- /formulario de contato -->

      </div>
    </section>