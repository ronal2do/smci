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
              <div class="column is-three-quarters">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->url }}?rel=0"></iframe>
                </div>   
              </div>
              <div class="column">
                @forelse ($videos as $v)
                                            <a href="/video/{{ $v->slug }}">
                                                <li>
                                                    <img src="http://img.youtube.com/vi/{{ $v->url }}/2.jpg" class="profile-img pull-left">
                                                    <div class="message-block">
                                                        <div><span class="username">{{ $v->titulo }}</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </li>
                                            </a>
                                            @empty
                                            @endforelse
              </div>
              
            </div>




                <div class="container-fluid">
                    <div class="side-body padding-top">
                        
                        <div class="row  no-margin-bottom">
                            <div class="col-sm-8 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">                       
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->url }}?rel=0"></iframe>
                                        </div>                                   
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <div class="title">Vídeos</div>
                                        </div>
                                        <div class="clear-both"></div>
                                    </div>
                                    <div class="card-body no-padding">
                                        <ul class="message-list">
                                            @forelse ($videos as $v)
                                            <a href="/video/{{ $v->slug }}">
                                                <li>
                                                    <img src="http://img.youtube.com/vi/{{ $v->url }}/2.jpg" class="profile-img pull-left">
                                                    <div class="message-block">
                                                        <div><span class="username">{{ $v->titulo }}</span> 
                                                        </div>
                                                        
                                                    </div>
                                                </li>
                                            </a>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


      </div>
    </section>

@endsection