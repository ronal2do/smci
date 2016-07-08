
    <section id="programacao" class="section is-medium">
      <div class="container">
        <h3 class="title is-2">
            <span class="icon is-large">
              <i class="fa fa-lightbulb-o"></i>
            </span>Programação
          </h3>
          <nav class="navbar">
              <div class="navbar-left">
               
               <a class="navbar-item minus">
                <span class="icon is-small"><i class="fa fa-font">-</i></span>
              </a>
              <a class="navbar-item plus">
                <span class="icon is-small"><i class="fa fa-font">+ </i></span>
              </a>
                <a class="navbar-item cont">
                  <span class="icon is-small"><i class="fa fa-low-vision"></i></span>
                </a>
                 
              </div>
          </nav>
          Dia 1 - 28/07
          <div class="example">
            <table class="table is-bordered is-striped">
              <thead>
                <tr>
                  <th width="150px">Horário</th>
                  <th>Palestra</th>
                  <th width="200px">Palestrante</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="150px">Horário</th>
                  <th>Palestra</th>
                  <th width="200px">Palestrante</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($palestras as $p)
                  @if ($p->dia == 1)
                      <tr>
                        <td class="is-link">
                          <a href="#">{{$p->horario}}</a>
                        </td>
                        <td>
                         {!! $p->palestra !!}
                        </td>
                        <td class="is-link is-icon">
                          {!! $p->mediador !!}
                        </td>
                      </tr>
                  @endif
               @endforeach
               
              </tbody>
            </table>
          </div>
          Dia 2 - 29/07
          <div class="example">
            <table class="table is-bordered is-striped">
              <thead>
                <tr>
                  <th width="150px">Horário</th>
                  <th>Palestra</th>
                  <th width="200px">Mediador</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="150px">Horário</th>
                  <th>Palestra</th>
                  <th width="200px">Mediador</th>
                </tr>
              </tfoot>
              <tbody>
               @foreach($palestras as $p)
                      @if ($p->dia == 2)
                          <tr>
                            <td class="is-link">
                              <a href="#">{{ $p->horario }}</a>
                            </td>
                            <td>
                             {!! $p->palestra !!}
                            </td>
                            <td class="is-link is-icon">
                              {!! $p->mediador !!}
                            </td>
                          </tr>
                      @endif
                   @endforeach
              </tbody>
            </table>
            <p style="font-size:.8em;">*Nomes em confirmação. A programação pode sofrer alteração de acordo com a agenda de cada autoridade. Os outros palestrantes já estão confirmados.
        </p>
          </div>
      </div>    
    </section>