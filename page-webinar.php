<?php include 'header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/webinar/fusion-360.png" class="img-fluid d-block mx-auto">
    </div>
  </div>
</div>

<div class="formulario">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-10 offset-lg-1">
        <div class="container">
        <div class="row">
          <div class="col">
            <h1>Comece a usar Fusion 360 - 3D CAD reinventado na nuvem</h1>
          </div>
        </div>
      </div>

      <hr>
        
      <div class="container">
        <div class="row">
          <div class="col">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
            <?php the_content(); ?>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?> 
          </div>
        </div>
      </div>

      <hr>
        
      <?php include 'pages/webinar-form.php'; ?>
      </div> <!-- col 10 -->
    </div>
  </div>
</div>

<?php include 'footer2.php'; ?>