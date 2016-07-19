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
                            <a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
                            <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
                            <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Profissão</th>
                                <th>Como conheceu</th>
                                <th>Cadastrado</th>
                                
                                <th>#</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                              <th>Nome</th>
                                <th>Email</th>
                                <th>Profissão</th>
                                <th>Como conheceu</th>
                                <th>Cadastrado</th>
                                
                                <th>#</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $u)
                            <tr>
                               
                                <td>{{$u->nome}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->profissao}}</td>
                                <td>{{$u->como}}</td>
                                <td>{{ $u->updated_at->format('d.m.Y') }}
                                    {{ $u->updated_at->diffForHumans() }}</td>
                                        
                                <td><strong><a href="/home/inscritos/{{$u->id}}/delete"><i class="fa fa-times-circle"></i> Deletar</a></strong></td>
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
