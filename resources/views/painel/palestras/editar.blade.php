@extends('painel.app')

@section('content')

<div class="container-fluid">
    <div class="side-body">
      
       <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Cadastrar Palestra {{ $p->horario }}</div>
                    </div>
                </div>
                <div class="card-body">
               
                    
                        {!! Form::model($p, [
                            'method' => 'PATCH',
                            'route' => ['palestras.update', $p->id]
                        ]) !!}

                        <div class="sub-title">Horário</div>
                      
                        <div>
                            {!! Form::text('horario', null, ['class' => 'form-control', 'placeholder'=> '10h30 às 12h30']) !!}
                           
                           
                        </div>
                        <div class="sub-title">Dia</div> 
                            {!! Form::radio('dia', '1', true, ['class' => 'form-control']) !!} dia 1
                            {!! Form::radio('dia', '2', null, ['class' => 'form-control']) !!} dia 2
                        <div  class="sub-title">
                           
                        </div>
                        <div class="sub-title">Mediadores</div>
                        <div>
                            {!! Form::textarea('mediador', null, ['class' => 'form-control', 'id'=> 'redactor_content']) !!}
                        </div>
                          <div class="sub-title">Palestra</div>
                        <div>
                              {!! Form::textarea('palestra', null, ['class' => 'form-control', 'id'=> 'redactor_content-two']) !!}
                        </div>

                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

</div>


@endsection

@section('post-script')
<script type="text/javascript">
    $(document).ready(
        function()
        {
            $('#redactor_content').redactor();
            $('#redactor_content-two').redactor();
        }
        );
    </script>
    @endsection                                 