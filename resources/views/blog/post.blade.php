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
        @include('includes.menu')
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


@include('includes.bmenu')

<section class="section is-medium">
      <div class="container">
         <div class="container">
          <p class="subtitle is-4">
            {{ $p->created_at->format('d.m.Y') }} <small>- {{ $p->created_at->diffForHumans() }}</small> 
          </p>
          <h2 class="title is-2">
            <a href="/blog/{{ $p->slug }}">
              {{ $p->titulo }}
            </a>
          </h2>
            <div class="content is-medium">
              <p>{!! $p->texto !!}</p>
           
            </div>
        </div>     
      <div class="columns">
        <div class="column">
          Autor
              <div class="notification autor">
                        <article class="media">
                          <figure class="media-left">
                            <p class="image is-64x64">
                             
                               <img src="http://graph.facebook.com/{{ $p->user->social->provider_user_id }}/picture?width=120&height=120" class="profile-img">
                             
                            </p>
                          </figure>
                          <div class="media-content">
                            <div class="content">
                             
                                <strong>{{ $p->user->name }}</strong> 
                                <br><br>
                                    <nav class="navbar">
                                    <div class="navbar-left">
                                      <a class="navbar-item" href="https://facebook.com/{{ $p->user->social->provider_user_id }}">
                                        <span class="icon is-small">
                            
                                        <i class="fa fa-facebook"></i></span>
                                      </a>
                                      <a class="navbar-item">
                                        <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                      </a>
                                      <a class="navbar-item">
                                        <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                      </a>
                                    </div>
                                  </nav>
                            </div>
                          </div>   
                        </article>
              
              </div>
          
        </div>
        
    
        <div class="column">
        Compartilhar
            <div class="notification share">
                  
                    <a class="button is-primary"><i class="fa fa-facebook"></i> </a>  
                    <a href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fsupport.twitter.com%2Farticles%2F332912&ref_src=twsrc%5Etfw&text={{ $p->titulo }}&tw_p=tweetbutton&url=http%3A%2F%2Fwww.smci.com.br/blog/{{ $p->slug }}" 
                      class="button is-primary"
                      target="_blank"><i class="fa fa-twitter"></i> </a> 
                    <a class="button is-primary"><i class="fa fa-google-plus"></i> </a> 
            </div>
        </div>
      </div>
      </div>
</section>

@endsection