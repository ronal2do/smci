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
            
    <section class="section is-medium">
      <div class="container">

            <div class="columns">
              <div class="column is-8">
                
                    <iframe width="100%" height="375" class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->url }}?rel=0"></iframe>

              </div>
              <div class="column is-4">

                  <div class="card is-fullwidth">
                        <header class="card-header">
                            <p class="card-header-title">
                              Vídeos
                            </p>
                        </header>

                        @forelse ($videos as $v)

                        <article class="media">
                            <a href="/video/{{ $v->slug }}">
                                  <figure class="media-left" style="padding:0 30px; float:left;">
                                   
                                      <img src="http://img.youtube.com/vi/{{ $v->url }}/default.jpg" class="profile-img pull-left">
                                   
                                  </figure>
                                  <div class="media-content" style="padding:0 30px; float:right;">
                                        <div><span class="username">{{ $v->titulo }}</span></div>
                                  </div>
                            </a>
                        </article>
                        @empty
                        @endforelse


                  </div>
              </div>



              
            </div>
      </div>
    </section>

@endsection