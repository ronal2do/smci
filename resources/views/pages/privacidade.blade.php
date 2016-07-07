@extends('layouts.app')

@section('content')

    <section id="oquee" class="section is-medium">
      <div class="container">
        <h3 class="title is-2">
            <span class="icon is-large">
              <i class="fa fa-lightbulb-o"></i>
            </span>
           Politica de Privacidade.
          </h3>
              <nav class="navbar">
                  <div class="navbar-left">
                  <audio id="player" src="frontend/audio/desafio.m4a"></audio>
                    <a class="navbar-item" onclick="document.getElementById('player').play()">
                      <span class="icon is-icon"><i class="fa fa-audio-description"></i></span>
                    </a>
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

         <div class="texto-tamanho">
            <h4 class="subtitle is-4">Política de privacidade para <a href='http://www.smci.com.br'>SMCI</a></h4><p>Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site o mais produtiva e agradável possível.</p><p>A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para o SMCI.</p><p>Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o SMCI serão tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).</p><p>A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telemóvel, morada, data de nascimento e/ou outros.</p><p>O uso do SMCI pressupõe a aceitação deste Acordo de privacidade. A equipa do SMCI reserva-se ao direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado.</p><h4 class="subtitle is-4">Os anúncios</h4><p>Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios, inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro), o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que páginas visitou dentro do nosso website.</p><h4 class="subtitle is-4">Ligações a Sites de terceiros</h4><p>O SMCI possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.</p><p>Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.</p>
         </div>
            <br><br>  
    </section>
    <!-- Modais -->


@endsection