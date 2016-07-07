        <div id="registrar">
            <p style="color:#69707a;text-align: left;">Preencha os dados para começar a assistir.​</p>
            <br>
            <div class="control">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                      {!! csrf_field() !!}
                      <div class="control is-grouped">
                       <input type="text" class="input" name="name" value="{{ old('name') }}" placeholder="Nome">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        
                        <input type="email" class="input" type="email" name="email" value="{{ old('name') }}" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      </div>
                      <div class="control is-grouped">
                      
                            

                                <input type="password" class="input" name="password" placeholder="Senha">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        

                       
                                <input type="password" class="input" name="password_confirmation" placeholder="Confirmar senha">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                         
                         
                      </div>
                      <div class="control is-grouped">
                    
                          <button type="submit" class="button is-primary">Enviar</button>
                      </div>

                </form>
            </div>
        </div>       
