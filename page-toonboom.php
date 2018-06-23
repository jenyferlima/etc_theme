<?php include 'header.php'; ?>
	<!-- MENU -->
  <?php include 'include/menu2.php'; ?>

<img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/banner/s-tb.png">

<div class="conteudo" id="inicio">
  <div class="container">
    <div class="row">
      <div class="col-10 offset-1">
        
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
        	<?php the_content(); ?>
        
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?> 

      </div>
		</div>
	</div>
</div>

<?php include 'pages/toonboom.php'; ?>

<?php include 'footer2.php'; ?>