<h4 class="title is-3  is-text-left">
      Autoridades da abertura 
</h4>
<div class="columns is-vcentered">
  <div class="column is-text-left">
      @foreach ($autoridades as $p)
        @if ($p->tipo === "A")
          @if ($p->id % 2 !== 0)
           @include('includes.autoridade')
          @else
          @endif 
        @endif 
     @endforeach
    <br>
  </div>

  <div class="column">
     @foreach ($autoridades as $p)
        @if ($p->tipo === "A")
          @if ($p->id % 2 == 0)
           @include('includes.autoridade')
          @else
          @endif 
        @endif 
     @endforeach      
    <br>  
  </div>
</div>