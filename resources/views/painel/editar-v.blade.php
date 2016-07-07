@extends('painel.app')

@section('content')

<div class="container-fluid">
    <div class="side-body">
      
       <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Enviar Vídeos</div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(array('url' => 'video.update')) !!}
                    <p>Receber apenas o ID do vídeo do youtube, segue depois do "?v=" como o exemplo abaixo</p><span style="color:#c5c5c5;">https://www.youtube.com/watch?v=</span><strong>JsfqsSJ0wVE</strong>
                    <div class="sub-title">TITULO</div>
                    <div>
                        <input type="text" class="form-control" name="titulo" placeholder="titulo">
                    </div>
                    <div class="sub-title">URL</div>
                    <div>
                        <input type="text" class="form-control" name="url" placeholder="url">
                    </div>
                    
                    <div class="sub-title">Destaque <span class="description">Ligar ou desligar</span></div>
                    <div>
                        <input type="checkbox" class="toggle-checkbox" name="isfeatured" checked>
                    </div> 
                    
                    
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
                
            </div>{!! Form::close() !!}
        </div>

    </div>




</div></div>


@endsection

