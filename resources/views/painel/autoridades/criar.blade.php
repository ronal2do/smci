@extends('painel.app')

@section('content')

<div class="container-fluid">
    <div class="side-body">
      
       <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Cadastrar autoridade</div>
                    </div>
                </div>
                <div class="card-body">{!! Form::open(array('url' => 'home/autoridades/criar')) !!}
                    
                    <div class="sub-title">Nome</div>
                  
                    <div>
                        <input type="text" class="form-control" name="name" placeholder="Título">
                    </div>
                    <div class="sub-title">Tipo</div>
                  
                    <div>
                        <input type="text" class="form-control" name="tipo" placeholder="Tipo">
                    </div>
                    <div class="sub-title">Cargo</div>
                    <div>
                        <textarea name="cargo" class="form-control" rows="1" id="redactor_content"></textarea>
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