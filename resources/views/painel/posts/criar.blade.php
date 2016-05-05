@extends('painel.app')

@section('content')

            <div class="container-fluid">
                <div class="side-body">
                  
					<div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <div class="title">Enviar Postagem</div>
                                    </div>
                                </div>
                                <div class="card-body">{!! Form::open(array('url' => 'home/posts/criar')) !!}
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati dicta fuga quasi assumenda aspernatur amet commodi doloribus itaque ipsum. Sunt quos saepe sequi est pariatur quia quae ipsam consequatur!</p>
                                    <div class="sub-title">Título</div>
                                    <div>
                                        <input type="hidden" class="form-control" name="user_id" placeholder="id user" value="{{ Auth::user()->id }}">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="titulo" placeholder="Título">
                                    </div>
                                    <div class="sub-title">Categoria </div>
                                    <div>
                                        <select name="category_id" width="100%">
                                                @foreach ($categoria as $c)
                                                <option value="{{ $c->id }}">{{ $c->nome }}</option>
                                                @endforeach
                                                
                                            
                                            
                                        </select>
                                    </div>
                                    <div class="sub-title">Matéria</div>
                                    <div>
                                        <textarea name="texto" class="form-control" rows="13" id="redactor_content"></textarea>
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