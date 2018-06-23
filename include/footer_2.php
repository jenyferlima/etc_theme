<!-- busca -->
<div class="row" style="padding-bottom: 20px;">
  <div class="col-10 offset-1">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <div class="row">
        <div class="col-9">
          <input class="form-control" type="search" placeholder="Digite sua busca" value="" name="s" id="s" />
        </div>
        <div class="col-3">
          <button type="button" class="btn btn-default" id="searchsubmit" value="Search" style="cursor:pointer"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- social -->
<div class="row">
  <div class="col-12 col-lg-10 offset-lg-1">
    <div class="row">
      <div class="col social">
        <a href="https://www.facebook.com/etcbrasil/" target="_blank" class="hvr-bob"><img src="<?php echo get_template_directory_uri(); ?>/img/social/etc_facebook.png" class="img-fluid mx-auto d-block"></a>
      </div>
      <div class="col social">
        <a href="https://twitter.com/etcbrasil_" target="_blank" class="hvr-bob"><img src="<?php echo get_template_directory_uri(); ?>/img/social/etc_twitter.png" class="img-fluid mx-auto d-block"></a>
      </div>
      <div class="col social">
        <a href="https://www.instagram.com/etcbrasil/" target="_blank" class="hvr-bob"><img src="<?php echo get_template_directory_uri(); ?>/img/social/etc_instagram.png" class="img-fluid mx-auto d-block"></a>
      </div>
      <div class="col social">
        <a href="https://www.linkedin.com/company/jewc-2012/" target="_blank" class="hvr-bob"><img src="<?php echo get_template_directory_uri(); ?>/img/social/etc_linkedin.png" class="img-fluid mx-auto d-block"></a>
      </div>
      <div class="col social">
        <a href="https://www.youtube.com/channel/UCHl48IgXwZKJMI7zKYRynaQ" target="_blank" class="hvr-bob"><img src="<?php echo get_template_directory_uri(); ?>/img/social/etc_youtube.png" class="img-fluid mx-auto d-block"></a>
      </div>
    </div>
  </div>
</div>

<!-- logo -->
<div class="row">
  <div class="col-8 offset-2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_etc.png" alt="" class="mx-auto d-block">
  </div>
</div>

<!-- copy -->
<div class="row">
  <div class="col-8 offset-2 copy">
    <p>ETC Brasil &copy; <?php echo date ("Y"); ?> - Todos os direitos reservados</p>
  </div>
</div>
