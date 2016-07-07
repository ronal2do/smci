<section id="newsletter" class="hero is-primary is-bold">
  <div class="hero-content">
    <div class="container">
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup" class="columns is-vcentered is-text-left">
        <div class="column is-third is-left">
          <p class="title "> SM<strong>CI</strong> Newsletter</p>
          <p class="subtitle">Seja notificado de nossa programação</p>
        </div>

        <div class="column">

          {!! Form::open(array('url' => '/newsletter')) !!}
            <div id="mc_embed_signup_scroll">
              <div class="control has-icon is-grouped">
                <input type="email" value="" name="email" class="input is-flat required email" id="mce-news" placeholder="endereço de email" required="" aria-required="true">
                <i class="fa fa-envelope"></i>
                <input type="submit" value="Assinar" name="subscribe" id="mc-embedded-subscribe" class="button is-primary is-outlined is-inverted">
              </div>
            </div>
            {!! Form::close() !!}
         


        </div>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
</section>
