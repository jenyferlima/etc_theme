<?php include 'header.php'; ?>
<?php include 'include/menu.php'; ?>

<div class="conteudo">
<div class="container">
  <div class="row">
    <div class="col">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="row justify-content-md-center">
    <div class="col-12 col-lg-2" style="background: #FF724E; padding:10px">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png" class="img-fluid mx-auto d-block" alt="...">
    </div>
    <div class="col-12 col-lg-7" style="padding-top:10px;">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
        	<?php the_content(); ?>
        
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?> 
    </div>
  </div>

  <div class="row justify-content-md-center">
    <div class="col">
      <h3>Design, Engenharia e Robótica</h3>
    </div>

    <div class="w-100"></div>

    <div class="col-12 col-lg-2 img-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/programas/autodesk.png" class="img-fluid d-block mx-auto"></div>
    <div class="col-12 col-lg-2 img-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/programas/adobe.png" class="img-fluid d-block mx-auto"></div>
    <div class="col-12 col-lg-2 img-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/programas/vex.png" class="img-fluid d-block mx-auto"></div>
    <div class="col-12 col-lg-2 img-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/programas/colmaker.png" class="img-fluid d-block mx-auto"></div>
  </div>

  <div class="row justify-content-md-center">
    <div class="col">
      <h3>Gestão e Tecnologia da Informação</h3>
    </div>

    <div class="w-100"></div>

    <div class="col-12 col-lg-2 img-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/programas/microsoft.png" class="img-fluid d-block mx-auto"></div>
    <div class="col-12 col-lg-2 img-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/programas/ic3.png" class="img-fluid d-block mx-auto"></div>
    <div class="col-12 col-lg-2 img-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/programas/badgeventure.png" class="img-fluid d-block mx-auto"></div>
  </div>
</div>
</div>

<?php include 'footer.php'; ?>