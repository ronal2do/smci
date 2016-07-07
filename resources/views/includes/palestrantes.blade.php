<h4 class="title is-3  is-text-left">
      Palestrantes
</h4>
<div class="columns is-vcentered">
  <div class="column is-text-left">
 
    @foreach ($palestrantes as $p)
      @if ($p->id % 2 == 0)
      @include('includes.profile')
     @else
     @endif 
   @endforeach

    <br>

  </div>

  <div class="column">
   @foreach ($palestrantes as $p)
      @if ($p->id % 2 !== 0)
        @include('includes.profile')
      @else
     @endif 
   @endforeach      
       <br>  
  </div>
</div>