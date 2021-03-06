@extends('painel.app')

@section('content')

@if  (Auth::user()->perm == 'dom')

<div class="container-fluid">
    <div class="side-body padding-top">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/home/usuarios">
                    <div class="card red summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-user fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $userct }}</div>
                                <div class="sub-title">Ver Usuários</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/home/newsletter">
                    <div class="card yellow summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-pencil-square-o fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $news }}</div>
                                <div class="sub-title">Newsletter</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/home/posts">
                    <div class="card green summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-check fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $posts->count() }}</div>
                                <div class="sub-title">Postagens</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/home/inscritos">
                    <div class="card blue summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-rss fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $inscritos }}</div>
                                <div class="sub-title">Inscritos</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/home/categorias">
                    <div class="card purple summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-tags fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $categorias->count() }}</div>
                                <div class="sub-title">Categorias</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="#">
                    <div class="card white summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-play fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $vidct }}</div>
                                <div class="sub-title">Vídeos</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/home/palestrantes">
                    <div class="card purple summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-play fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $palestrantect }}</div>
                                <div class="sub-title">Palestrantes</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/home/palestras">
                    <div class="card green summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-play fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $palestract }}</div>
                                <div class="sub-title">Palestras</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="/home/autoridades">
                    <div class="card purple summary-inline">
                        <div class="card-body">
                            <i class="icon fa fa-play fa-4x"></i>
                            <div class="content">
                                <div class="title">{{ $autoridadect }}</div>
                                <div class="sub-title">Autoridades</div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row  no-margin-bottom">
            <div class="col-sm-6 col-xs-12">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title"><i class="fa fa-play"></i> Últimos vídeos</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                    <div class="card-body no-padding">
                        <ul class="message-list">                                     
                            @forelse ($videos as $v)
                            <a href="/home/video/{{ $v->slug }}">
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
            <div class="col-sm-6 col-xs-12">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title"><i class="fa fa-comments-o"></i> Últimas mensagens</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                    <div class="card-body no-padding">
                        <ul class="message-list">
                            @forelse ($mensagens as $m)
                            <a href="/home/mensagem/{{ $m->id }}">
                                <li>
                                    <span class="profile-img pull-left" style="margin-left: 20px;"><i class="icon fa fa-envelope-o fa-4x"></i></span>
                                    <div class="message-block">
                                        <div><span class="username">{{ $m->nome }}</span> <span class="message-datetime"style="float: right;">{{ $m->created_at->format('d.m.Y') }}
                                            {{ $m->created_at->diffForHumans() }}</span>
                                        </div>
                                        <div class="message">{!! $m->mensagem !!}</div>
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

@else (Auth::user()->perm == 'user')

<div class="container-fluid">
    <div class="side-body padding-top">
        
        <div class="row  no-margin-bottom">
            <div class="col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-xs-12">   
                        @if ( $video != '')                    
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->url }}?rel=0"></iframe>
                        </div>
                        @endif
                        <div class="embed-responsive embed-responsive-16by9">
                          
                        </div>
                        <!--   $last_for_user = Timelog::where('user_id', $user_id)->orderBy('id', 'desc')->first(); -->
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title"><i class="fa fa-youtube"></i> Ultimos Vídeos</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                    <div class="card-body no-padding">
                        <ul class="message-list">
                            @forelse ($videos as $v)
                            <a href="/home/video/{{ $v->slug }}">
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

@endif



@endsection