@extends('layouts.app')

@section('content')
<section class="hero is-success is-bold">
  <div class="hero-header">
    <header class="header">
      <div class="container">
        <div class="header-left" style="padding: 5px 5px;">
         
              @include('includes.logo')
          
        </div>
        <span id="header-toggle" class="header-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <!-- include menu -->
      </div>
    </header>
  </div>
  <div class="hero-content" id="banner">
    <!-- Hero content: will be in the middle -->
    
      <div class="container" >
        <br>
        <br>
        <br>
       
      </div>
 
  </div>
</section>
            
<div class="container">
    <div class="is-half is-offset-one-quarter">

            <div class="panel panel-default">
            <br>
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <p class="control has-icon">
                          <input class="input" type="email" placeholder="Email" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          <i class="fa fa-envelope"></i>
                        </p>
                        <p class="control has-icon">
                          <input class="input" type="password" placeholder="Senha" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          <i class="fa fa-lock"></i>
                        </p>
                        <p class="control">
                          <button type="submit" class="button is-success">
                            Login
                          </button>
                          <a class="button is-facebook" style="background: #268bd2; color: white;" href="http://smci.com.br/auth/facebook">facebook</a>
                        </p>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection
