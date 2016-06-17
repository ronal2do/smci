@extends('painel.app')

@section('content')

<div class="container-fluid">
    <div class="side-body">
      
       <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-title">
                        <div class="title">Palestrantes</div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Dia</th>
                                <th>Horário</th>
                                <th>Paletrante</th>
                                <th>Palestra</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Dia</th>
                                <th>Horário</th>
                                <th>Paletrante</th>
                                <th>Palestra</th>
                                <th>#</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($palestras as $p)
                            <tr>
                                <td>{{ $p->dia }}</td>
                                <td>{{ $p->horario }}</td>
                                <td>{!! $p->mediador !!}</td>
                                <td>{!! str_limit($p->palestra, $limit = 95, $end = ' ... ') !!}</td>
                                <td><strong><a href="/home/palestra/{{$p->slug}}/delete"><i class="fa fa-times-circle"></i> Deletar</a></strong></td>
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
