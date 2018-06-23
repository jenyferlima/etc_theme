<?php include 'header.php'; ?>
	<!-- MENU -->
  <?php include 'include/menu.php'; ?>

<div class="conteudo certificado">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
        	<?php the_content(); ?>
        
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php include 'include/mapa.php'; ?>

<?php include 'footer.php'; ?>