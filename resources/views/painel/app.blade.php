<!DOCTYPE html>
<html>

<head>
    <title>Painel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/lib/css/redactor.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="/backend/css/style.css">
    <link rel="stylesheet" type="text/css" href="/backend/css/themes/flat-blue.css">
</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                       
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active"><a href="/home">Dashboard</a></li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                       <!--  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-comments-o"></i></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="title">
                                    Notification <span class="badge pull-right">0</span>
                                </li>
                                <li class="message">
                                    No new notification
                                </li>
                            </ul>
                        </li> -->
                        
                        @if  (Auth::user()->perm == 'dom')
                        <li class="dropdown danger">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus"></i> </a>
                            <ul class="dropdown-menu danger  animated fadeInDown">
                                <li class="title">
                                    Adicionar 
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="/home/usuarios">
                                            <li class="list-group-item">
                                                <i class="fa fa-user icon"></i> Usuários
                                            </li>
                                        </a>
                                        <a href="/home/categorias/criar">
                                            <li class="list-group-item">
                                               <i class="fa fa-tags icon"></i> Categorias
                                            </li>
                                        </a>
                                        <a href="/home/posts/criar">
                                            <li class="list-group-item">
                                               <i class="fa fa-check icon"></i> Postagem
                                            </li>
                                        </a>
                                        <a href="/home/video">
                                            <li class="list-group-item">
                                                <i class="fa fa-play icon"></i> Vídeo
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <i class="fa fa-rss icon"></i> Newsletter
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        @endif
    
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="profile-img">
                                    @if (Auth::user()->social != '')
                                       <img src="http://graph.facebook.com/{{ Auth::user()->social->provider_user_id }}/picture?width=300&height=300" class="profile-img">
                                    @endif
                                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=Fotos%20apenas%20para%20usu%C3%A1rios%20logados%20pelo%20facebook&w=300&h=300" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username"> {{ Auth::user()->name }}</h4>
                                        <p> {{ Auth::user()->email }}</p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                   
                                            <a href="{{ url('/logout') }}" type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Sair</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

          @yield('content')
        </div>
        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right"> <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © SMCI 2016 Copyright.
            </div>
        </footer>
       
    <!-- Javascript Libs -->
    <script type="text/javascript" src="/backend/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/Chart.min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/select2.full.min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/redactor.min.js"></script>
    <script type="text/javascript" src="/backend/lib/js/ace/ace.js"></script>
    <script type="text/javascript" src="/backend/lib/js/ace/mode-html.js"></script>
    <script type="text/javascript" src="/backend/lib/js/ace/theme-github.js"></script>
    <!-- Javascript -->
    <script type="text/javascript" src="/backend/js/app.js"></script>
     @yield('post-script')
  <!--   <script type="text/javascript" src="/backend/js/index.js"></script> -->
</body>

</html>
