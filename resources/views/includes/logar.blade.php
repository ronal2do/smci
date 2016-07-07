        <div id="login" >
            <p style="color:#69707a;text-align: left;">Preencha os dados para começar a assistir.​</p>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                  <div class="control is-grouped">
                        <input type="email" class="input" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <input type="password" class="input" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <button type="submit" class="button is-primary">Logar</button>
                </div>
            </form>
        </div>
