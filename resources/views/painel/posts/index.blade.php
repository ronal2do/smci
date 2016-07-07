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
                                <th>Nome</th>
                                <th>Email</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>#</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($posts as $p)
                            <tr>
                                <td>{{ $p->titulo }}</td>
                                <td>{!! str_limit($p->texto, $limit = 95, $end = ' ... ') !!}</td>
                                <td><strong><a href="/home/post/{{$p->slug}}/delete"><i class="fa fa-times-circle"></i> Deletar</a></strong></td>
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
