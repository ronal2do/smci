@extends('painel.app')

@section('content')

<div class="container-fluid">
    <div class="side-body">
      
       <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Cadastrar Palestrante</div>
                    </div>
                </div>
                <div class="card-body">
               
                        {!! Form::model($p, [
                            'method' => 'PATCH',
                            'route' => ['autoridades.update', $p->id]
                        ]) !!}


                        <div class="sub-title">Nome</div>
                  
                        <div>
                           {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Título']) !!}
                          
                        </div>
                       
                        <div class="sub-title">Curriculo</div>
                        <div>
                            {!! Form::textarea('cargo', null, ['class' => 'form-control', 'id'=> 'redactor_content']) !!}
                        </div>
                         
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
            </div>{!! Form::close() !!}
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
        }
    );
</script>
@endsection                                 