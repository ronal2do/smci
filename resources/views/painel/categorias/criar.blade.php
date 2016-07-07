@extends('painel.app')

@section('content')

<div class="container-fluid">
    <div class="side-body">
      
       <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Categoria</div>
                    </div>
                </div>
                <div class="card-body">{!! Form::open(array('url' => 'home/categorias/criar')) !!}
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati dicta fuga quasi assumenda aspernatur amet commodi doloribus itaque ipsum. Sunt quos saepe sequi est pariatur quia quae ipsam consequatur!</p>
                    <div class="sub-title">Título</div>
                    <div>
                        <input type="text" class="form-control" name="nome" placeholder="Título">
                    </div>                                
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
                
            </div>{!! Form::close() !!}
        </div>
    </div>
</div>

</div>


@endsection
