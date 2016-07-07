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
                <div class="card-body">{!! Form::open(array('url' => 'home/palestras/criar')) !!}
                    
                    <div class="sub-title">Horário</div>
                  
                    <div>
                        <input type="text" class="form-control" name="horario" placeholder="10h30 às 12h30">
                    </div>
                    <div class="sub-title">Dia</div>
                    <div  class="sub-title">
                        <label for="dia">1<input type="radio" class="form-control" name="dia" value="1" checked></label>
                        <label for="dia">2<input type="radio" class="form-control" name="dia" value="2"></label>
                    </div>
                    <div class="sub-title">Mediadores</div>
                    <div>
                        <textarea name="mediador" class="form-control" rows="13" id="redactor_content"></textarea>
                    </div>
                      <div class="sub-title">Palestra</div>
                    <div>
                        <textarea name="palestra" class="form-control" rows="13" id="redactor_content-two"></textarea>
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
            $('#redactor_content-two').redactor();
        }
        );
    </script>
    @endsection                                 