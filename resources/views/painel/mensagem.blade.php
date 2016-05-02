@extends('painel.app')

@section('content')

            <div class="container-fluid">
                <div class="side-body">
                  
					<div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Mensagem # {{$m->id}} de {{ $m->nome }}</div>
                                        <div class="title"><small>Assunto: {{$m->assunto}}</small> </div>
                                    </div>
                                    
                                        <div class="pull-right"><small>{{$m->created_at}}</small> </div>
                                </div>
                                 <div class="card-body">
                                        <div class="title">{!! $m->mensagem !!}</div>
                                 </div>
                                 <div class="card-body">
                                        <div class="title"><a href="mailto:{{$m->email}}">responder</a></div>
                                        <div class="title"><a href="/home/mensagem/{{$m->id}}/destroy"><i class="fa fa-eye"></i> marcar como lida</a></div>
                                 </div>
                                    	
                            </div>
                            </div>
                        </div>
                    </div>

            </div>


@endsection

 												