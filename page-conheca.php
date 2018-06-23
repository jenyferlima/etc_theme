<?php include 'header.php'; ?>
	<!-- MENU -->
  <?php include 'include/menu.php'; ?>

<div class="certificado conteudo">
  <div class="container">
    <div class="row col-12 col-lg-8 offset-lg-2">
      <div class="col">
        <h1><?php the_title(); ?></h1>
      </div>

      <div class="w-100"></div>

      <div class="col-12 col-lg-4">
        <a href="https://certiport.pearsonvue.com/Certifications/AutodesK" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/autodesk.png" class="img-fluid img-thumbnail mx-auto d-block hvr-bob" alt="..."></a>
      </div>
      <div class="col-12 col-lg-4">
        <a href="https://certiport.pearsonvue.com/Certifications/Microsoft" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/microsoft.gif" class="img-fluid img-thumbnail mx-auto d-block hvr-bob" alt="..."></a>
      </div>
      <div class="col-12 col-lg-4">
        <a href="https://certiport.pearsonvue.com/Certifications/Toon-Boom/Certified-Associate/Overview" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/toonboom.png" class="img-fluid img-thumbnail mx-auto d-block hvr-bob" alt="..."></a>
      </div>
    </div>

    <div class="row col-12 col-lg-10 offset-lg-1">
      <div class="col">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
        	<?php the_content(); ?>
        
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
      </div>

      <div class="w-100"></div>

      <div class="col-12">
        <img src="http://etcbrasil.com/wp-content/uploads/2018/05/razoes_autodesk.png" class="img-fluid d-block mx-auto">
      </div>
    </div>
  </div>
</div>

<div class="certificado_banner">
  <div class="container">
    <div class="row align-items-center justify-content-md-center">
      <div class="col-12 col-lg-6">
        <p>O seu <b>Badge</b> é a maneira mais fácil e visual para comprovar as suas habilidades nas mídias sociais, como Linkedin, Facebook, Twitter, e até no seu currículo ou assinatura de e-mail.</p>
        <p><a href="www.youracclaim.com" target="_blank" class="hvr-bob"><b>www.youracclaim.com</b></a></p>
      </div>
      <div class="col-12 col-lg-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logos/Autodesk_fusion_user.png" class="img-fluid mx-auto d-block" alt="...">
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>