@extends('painel.app')

@section('content')

<div class="container-fluid">
    <div class="side-body">
      
       <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-title">
                        <div class="title">Usuários</div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                
                                <th>Email</th>
                                <th>Cadastrado</th>
                                <th>Atualizado</th>
                                
                                <th>#</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                              
                                <th>Email</th>
                                <th>Cadastrado</th>
                                <th>Atualizado</th>
                                
                                <th>#</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $u)
                            <tr>
                               
                                <td>{{$u->email}}</td>
                                <td>{{ $u->created_at->format('d.m.Y') }}
                                    {{ $u->created_at->diffForHumans() }}</td>
                                    <td>{{ $u->updated_at->format('d.m.Y') }}
                                        {{ $u->updated_at->diffForHumans() }}</td>
                                        
                                        <td><strong><a href="/home/newsletter/{{$u->id}}/delete"><i class="fa fa-times-circle"></i> Deletar</a></strong></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @endsection
