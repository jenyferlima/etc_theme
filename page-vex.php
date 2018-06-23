<?php include 'header.php'; ?>
	<!-- MENU -->
  <?php include 'include/menu.php'; ?>

<img src="<?php echo get_template_directory_uri(); ?>/img/banner/banner_5.png" class="img-fluid mx-auto d-block">

<div class="conteudo">
  <div class="container">
    <div class="row">
      <div class="col-10 offset-1">
        <div class="row align-items-center">
          <div class="col-7">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
            <?php the_content(); ?>

            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?> 
          </div>
          
          <div class="col-5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/robotica/robotica_2.png" class="img-fluid d-block mx-auto"><br />
            <img src="<?php echo get_template_directory_uri(); ?>/img/robotica/robotica_3.png" class="img-fluid d-block mx-auto">
          </div>
        </div>
      </div>
		</div>
	</div>
</div>

<?php include 'pages/vex.php'; ?>

<?php include 'footer2.php'; ?>